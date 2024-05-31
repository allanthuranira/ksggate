<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\participants;

class participantsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'participants';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new participants());

        $grid->column('fullName', __('FullName'));
        $grid->column('idNumber', __('IdNumber'));
        $grid->column('arrivalDateTime', __('ArrivalDateTime'));
        $grid->column('courseName', __('CourseName'));

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
        $show = new Show(participants::findOrFail($id));

        $show->field('fullName', __('FullName'));
        $show->field('idNumber', __('IdNumber'));
        $show->field('arrivalDateTime', __('ArrivalDateTime'));
        $show->field('courseName', __('CourseName'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new participants());

        $form->text('fullName', __('FullName'));
        $form->text('idNumber', __('IdNumber'));
        $form->datetime('arrivalDateTime', __('ArrivalDateTime'))->default(date('Y-m-d H:i:s'));
        $form->text('courseName', __('CourseName'));

        return $form;
    }
}
