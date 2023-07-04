<?php

class m220219_222513_notification_rbac
{
    public function up(){

        $auth = Yii::$app->authManager;

        $role1 = Yii::$app->setting->getValue('site::admin_role');
        $admin = (isset($role1) && $role1 != '') ? $auth->getRole($role1) : $auth->getRole('admin');

        $role2 = Yii::$app->setting->getValue('site::user_role');
        $user = (isset($role2) && $role2 != '') ? $auth->getRole($role2) : $auth->getRole('user');

        $notificationWebDefaultIndex = $auth->createPermission('notificationWebDefaultIndex');
        $notificationWebDefaultIndex->description = 'Notification Web Default Index';
        $auth->add($notificationWebDefaultIndex);
        $auth->addChild($admin, $notificationWebDefaultIndex);



        $notificationWebDefaultCreate = $auth->createPermission('notificationWebDefaultCreate');
        $notificationWebDefaultCreate->description = 'Notification Web Default Index';
        $auth->add($notificationWebDefaultCreate);
        $auth->addChild($admin, $notificationWebDefaultCreate);


        $notificationWebDefaultDelete = $auth->createPermission('notificationWebDefaultDelete');
        $notificationWebDefaultDelete->description = 'Notification Web Default Delete';
        $auth->add($notificationWebDefaultDelete);
        $auth->addChild($user, $notificationWebDefaultDelete);


        $notificationWebDefaultUpdate = $auth->createPermission('$notificationWebDefaultUpdate');
        $notificationWebDefaultUpdate->description = 'Notification Web Default update';
        $auth->add($notificationWebDefaultUpdate);
        //$auth->addChild($admin, $notificationWebDefaultUpdate);

    }


    public function down(){

        $auth = Yii::$app->authManager;
        $auth->remove($auth->getPermission('notificationWebDefaultIndex'));
        $auth->remove($auth->getPermission('notificationWebDefaultCreate'));
        $auth->remove($auth->getPermission('notificationWebDefaultDelete'));
        $auth->remove($auth->getPermission('$notificationWebDefaultUpdate'));

    }
}