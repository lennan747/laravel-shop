<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->column('id', __('ID'));
        $grid->column('title', __('Title'));
        //$grid->column('description', __('Description'));
        //$grid->column('image', __('Image'));
        $grid->column('on_sale', __('On sale'))->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->column('rating', __('Rating'));
        $grid->column('sold_count', __('Sold count'));
        $grid->column('review_count', __('Review count'));
        $grid->column('price', __('Price'));
//        $grid->column('created_at', __('Created at'));
//        $grid->column('updated_at', __('Updated at'));

        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('ID'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('on_sale', __('On sale'));
        $show->field('rating', __('Rating'));
        $show->field('sold_count', __('Sold count'));
        $show->field('review_count', __('Review count'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Product);

        $form->text('title', __('Title'))->rules('required');
        $form->ckeditor('description', __('Description'))->rules('required');
        $form->image('image', __('Image'))->rules('required|image');
        $form->switch('on_sale', __('On sale'))->default(1);

        $form->hasMany('skus','SKU 列表',function (Form\NestedForm $form){
            $form->text('title', 'SKU 名称')->rules('required');
            $form->text('description', 'SKU 描述')->rules('required');
            $form->text('price', '单价')->rules('required|numeric|min:0.01');
            $form->text('stock', '剩余库存')->rules('required|integer|min:0');
        });

        $form->saving(function (Form $form){
            $form->model()->price = collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME, 0)->min('price') ?: 0;
        });
        return $form;
    }
}
