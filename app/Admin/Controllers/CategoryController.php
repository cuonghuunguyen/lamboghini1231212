<?php

namespace App\Admin\Controllers;

use \Illuminate\Support\Facades\DB;
use App\Category;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CategoryController extends Controller {

    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content) {
        return $content
                        ->header('Index')
                        ->description('description')
                        ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content) {
        return $content
                        ->header('Detail')
                        ->description('description')
                        ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content) {
        return $content
                        ->header('Edit')
                        ->description('description')
                        ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content) {
        return $content
                        ->header('Create')
                        ->description('description')
                        ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid() {
        $grid = new Grid(new Category);

        $grid->filter(function($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('Name', 'Name');
//            $filter->where(function ($query) {
//
//                $query->whereHas('profile', function ($query) {
//                    $query->where('address', 'like', "%{$this->input}%")->orWhere('email', 'like', "%{$this->input}%");
//                });
//            }, 'Address or mobile');
        });

        $grid->id('Id')->sortable();
        $grid->name('Name')->sortable();
        $grid->column('category_parent')->display(function () {
            if ($this->parent_id != 0) {
                return DB::table('categories')->find($this->parent_id)->name;
            } else {
                return "Root";
            }
        });
        $grid->created_at('Created at')->sortable();
        $grid->updated_at('Updated at')->sortable();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id) {
        $show = new Show(Category::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->parent_id('Parent id');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form() {
        $form = new Form(new Category);

        $form->text('name', 'Name');
        $form->number('parent_id', 'Parent id');

        return $form;
    }

}
