<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ="posts";
    protected $primaryKey ="id";
    protected $foreignKey ="user_id";
    protected $fillable = ['user_id','title','body','like','dislike','image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(User::class);
    }

    public function savePost($request){
       if ($request->hasFile('image')){ 
       if($request->file('image')->isValid()){
            $file = $request->file('image');
            $name = rand(11111,99999).'.'.$file->getClientOriginalExtension();
            $request->file('image')->move("upload",$name);
             }        
         }   
        $data = [
            'user_id' => $request->get('user_id'),
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'like' => $request->get('like'),
            'dislike' => $request->get('dislike'),
            'image' =>url('/').'/upload/'. $name
             ];
             return self::create($data);
            
         }
        public function updatePost($request,$id){
        $post = self::find($id);
            $data = [
                'user_id' => $request->get('user_id'),
                'title' => $request->get('title'),
                'body' => $request->get('body'),
                'like' => $request->get('like'),
                'dislike' => $request->get('dislike'),                
            ];
            if($post->update($data))
            {
                return true;
            }	
            return false;
        }
        public function addLike($id)
        {
            $post = self::find($id);
            $post->like++;
            if($post->save())
            {
                return true;
            }
            return false;
        }
        public function destoryLike($id)
        {
            $post = self::find($id);
            $post->dislike--;
            if($post->save())
            {
                return true;
            }
            return false;
        }
        public function getNameAttribute($value)
        {
            return name($value);
        }
}
