<?php

namespace App\Admin\Controllers;

use \App\Models\News;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use Illuminate\Support\Str;
use OpenAdmin\Admin\Controllers\AdminController;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id_news', __('Id news'));
        $grid->column('id_admin', __('Id admin'));
        $grid->column('title', __('Title'))->display(function ($title) {
            return Str::limit($title, 50);
        });
        
        $grid->column('isi', __('Isi'))->display(function ($isi) {
            return Str::limit($isi, 50);
        });
        $grid->column('picture')->image();
        $grid->column('slug', __('Slug'));
        $grid->column('tanggal', __('Tanggal'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id_news', __('Id news'));
        $show->field('id_admin', __('Id admin'));
        $show->field('title', __('Title'));
        $show->field('isi', __('Isi'));
        $show->field('picture', __('Picture'));
        $show->field('slug', __('Slug'));
        $show->field('tanggal', __('Tanggal'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->text('id_admin', __('Id admin'));
        $form->text('title', __('Title'));
        $form->ckeditor('isi', __('Isi'));
        $form->multipleImage('picture', __('Picture'));
        $form->datetime('tanggal', __('Tanggal'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}