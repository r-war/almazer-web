<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use Flash;

class ArticleController extends Controller
{
    //
    protected $aArticle;
    
    public function index(){
        $aArticle = Article::All()->sortByDesc('date');  
        
        return view('backend.article.index')->with(
            'model', $aArticle
        );
    }

    public function create(Article $model){
        $view = [
            'model' => $model
        ];

        return view('backend.article.add', $view);
    }

    public function store(Request $request, Article $model){
		# set validation rules
        $rules = [
            'date' => [
                'required',
                'date'
            ],
            'name' => [
                'required'
            ],
            'picture' => [
                'image',
                'required'
            ]
        ];

        # run validator
        $validator = $request->validate($rules);

        $model->date       = $request->date;
        $model->name       = $request->name;
        $model->content    = $request->content;

        
        // upload and save file path of picture
        $file_path = 'uploads/';

        $model->picture     = $file_path . $request->file('picture')->getClientOriginalName();
        
        if ($model->save()) {
            $request->file('picture')->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
            return $this->saved();
        }

    }

    public function destroy($id){

        $article = Article::find($id);

        if($article){
            //unlink($article->picture);
            $article->delete();
            Flash::success('Article deleted successfully.');

            return redirect(route('article.index'));
        }else{
            Flash::error('Article not found');

            return redirect(route('article.index'));
        }

    }

    public function edit($id){
        
        $article = Article::find($id);

        return view('backend.article.edit')->with(
            'model', $article
        );
    }

    public function update($id, Request $request){
        $article = Article::findOrFail($id);

		# set validation rules
        $rules = [
            'date' => [
                'required',
                'date'
            ],
            'name' => [
                'required'
            ],
        ];

        # run validator
        $validator = $request->validate($rules);

        // upload and save file path of picture
        $file_path = 'uploads/';

        $article->date       = $request->date;
        $article->name       = $request->name;
        $article->content    = $request->content;

        if($request->hasFile('picture')){
            //unlink($article->picture);
            $file = $request->file('picture');
            $article->picture     = $file_path . $this->renamed($file->getClientOriginalName());
            $file->move(
                $file_path, 
                $request->file('picture')->getClientOriginalName());
        }

        
        if ($article->save()) {
            Flash::success('Article updated.');

            return redirect('article');
        }
        
    }

    public function show ($id){
        $article = Article::find($id);

        return view('backend.article.index')->with(
            'model', $article
        );
    }


}
