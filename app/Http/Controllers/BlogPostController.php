<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Facades\App;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class BlogPostController extends CrudController{

    public function all($entity){
        parent::all($entity);

        //Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
        $this->filter = \Zofe\Rapyd\DataFilter\DataFilter::source(new \App\BlogPost);
        $this->filter->add('title', 'Title', 'text');
        //$this->filter->add('publication_date', 'Publication Date', 'datetime');
        //$this->filter->add('categories', 'Category', '...');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \Zofe\Rapyd\DataGrid\DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');
        $this->grid->add('slug', 'URL Slug');
        $this->grid->add('publication_date', 'Publication Date');
        $this->addStylesToGrid();

        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);
        // id, publication_date, title, slug, body, format (html/marmkdown/bbcode),
        //  categories, source, draft, created_at, updated_at, deleted_at

        \App\BlogPost::creating(function($data){
            $slugify = new Slugify();
            $data->slug = $slugify->slugify()
        }) /** commit to git, remove this panel, do everything in regular laravel */

        $this->edit = \Zofe\Rapyd\DataEdit\DataEdit::source(new \App\BlogPost());

        $this->edit->add('title', 'Title', 'text')->rule('required');
        //if ($entity->)
        $this->edit->add('slug', 'URL Slug', 'text')->rule('required');
        $this->edit->add('body', 'Post Body', 'textarea')->rule('required');
        $this->edit->add('format', 'Format', 'select')->rule('required')
            ->insertValue(1)
            ->option('markdown', 'Markdown')
            ->option('html', 'HTML')
            ->option('bbcode', 'BBCode')
        ;
        $this->edit->add('categories', 'Categories', 'checkboxgroup')
            ->option('3D Printing','3D Printing')
            ->option('DIY','DIY')
            ->option('Electronics','Electronics')
            ->option('Hackaday','Hackaday')
            ->option('Miscellaneous','Miscellaneous')
            ->option('Programming','Programming')
            ->option('Web Development','Web Development')
            ->option('Work','Work')
            ->option('YouTube','YouTube')
        ;
        $this->edit->add('source', 'Source', 'radiogroup')
            ->option(null, 'None')
            ->option('Hackaday','Hackaday')
            ->option('YouTube','YouTube')
        ;
        $this->edit->add('publication_date', 'Publication Date', 'date')->rule('required')
            ->format('Y-m-d', 'en')
        ;
        $this->edit->add('draft', 'Draft', 'checkbox');

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');

			$this->edit->add('code', 'Code', 'text')->rule('required');


        */

        return $this->returnEditView();
    }
}
