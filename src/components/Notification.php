<?php

namespace portalium\site\components;

use yii\base\Component;

class Notification extends Component
{

    public function addNotification($type,$id_to,$text,$title)
    { 
        $model = new Notification();
         if($type = '1')
         {
            // findReceiver fonksiyonu ile user_id var mı diye kontrol et
             $model->type = $this->type;
             $model->id_to = $this->id_to;
             $model->text = $this->text; 
             $model->title = $this->title; 
             $model->save();
         }
         else if($type= '2')
         {
            // findReceiver fonksiyonu ile group_id var mı diye kontrol et
             $model->type = $this->type;
             $model->id_to = $this->id_to;
             $model->text = $this->text; 
             $model->title = $this->title;    
             $model->save();
         }
         else
         {
             echo "Wrong Type";
             exit;
         }
    }

    public function findReceiver($type,$id_to)
    {
        //if ile gelen type bilgisine göre userid veya group id mevcut mu kontrolü yapacak.
    }
}
?>