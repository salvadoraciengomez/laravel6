<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use App\Reply;

    class Conversation extends Model{

        public $best_reply_id;

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
            $this->best_reply_id=$reply->id;
            $this->save();
        }
    }
?>