<?php

namespace portalium\site\components;

use yii\base\Component;

class Notification extends Component
{

    public function addNotification($type,$id_to,$text,$title)
    { 
        $model = new Notification();

        $model->load();
        $model->save();
    }

    public function denemegetNotification($id_user)  
    {
        $notifications = Notification::findAll($id_user);
        return $notifications;
    }

    public function getNotification($id_user)  
    {
        $bildirim = Notification::find()->all();

        foreach($bildirim as $notifications)
        {
            if($notifications->$id_to == $id_user && $notifications->$type == '1') 
            {
                return $notifications;
            }
            else if($notifications->$type == '2') //user'id o grupta var mı diye bak ve notificationu döndür
            {

            }

        }
    }

}
?>