<?php 
namespace app\modules\Admin;


class AdminServiceProvider extends \app\modules\ServiceProvider {

    public function register()
    {
        parent::register('Admin');
    }

    public function boot()
    {
        parent::boot('Admin');
    }

}
?>