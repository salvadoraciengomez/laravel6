<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use App\Reply;

    class Conversation extends Model{
        public function replies(){
            return $this->hasMany(Reply::class);
        }
        public function user(){
            return $this->belongsTo(User::class);
        }
        public function usuario(){
            return $this->belongsTo(User::class);
        }
        public function setBestReply(Reply $reply){
            $this->bestReplyId=$reply->id;
            $this->save();
        }
    }
?>