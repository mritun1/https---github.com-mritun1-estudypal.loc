<?php 
class PAGECONTROLLER{

    public static function home(){
        $page_arr = array(
            'title' => 'Problems and solution base.',
            'description' => 'Get all the problems along with their solutions.'
        );
        CONFIG::route_set('layout.header','home','layout.footer',$page_arr);
    }
    //----------------------------------------------------------------------
    //          PAGES ROUTER - START
    //----------------------------------------------------------------------
    public static function profile(){
        $page_arr = array(
            'title' => 'Profile',
            'description' => 'Des'
        );
        CONFIG::route_set('layout.header','pages.profile','layout.footer',$page_arr);
    }
    public static function login(){
        $page_arr = array(
            'title' => 'Login',
            'description' => 'Login to the site'
        );
        CONFIG::route_set('layout.header','auth.login','layout.footer',$page_arr);
    }
    public static function register(){
        $page_arr = array(
            'title' => 'Register',
            'description' => 'Register to the site'
        );
        CONFIG::route_set('layout.header','auth.register','layout.footer',$page_arr);
    }
    public static function search_ask(){
        $page_arr = array(
            'title' => 'Search and Ask',
            'description' => 'You can search the problems and start asking.'
        );
        CONFIG::route_set('layout.header','pages.search-ask','layout.footer',$page_arr);
    }
    public static function asking(){
        $page_arr = array(
            'title' => 'Asking',
            'description' => 'Asking.'
        );
        CONFIG::route_set('layout.header','pages.asking','layout.footer',$page_arr);
    }
    public static function new_problems(){
        $page_arr = array(
            'title' => 'Newest Problems',
            'description' => 'List of all the newest problems.'
        );
        CONFIG::route_set('layout.header','pages.problems.newest','layout.footer',$page_arr);
    }
    public static function lists_problem(){

        $id = CONFIG::getRouteRequest(2); 
        $category = APP_CUSTOM_PROBLEMS::category('single',$id);

        $page_arr = array(
            'title' => $category['title'],
            'description' => $category['des']
        );
        CONFIG::route_set('layout.header','pages.problems.lists','layout.footer',$page_arr);
    }
    public static function all_ask(){

        $id = CONFIG::getRouteRequest(3); 
        $topics = APP_CUSTOM_PROBLEMS::topics('single_topic',$id);

        $page_arr = array(
            'title' => $topics['title'],
            'description' => $topics['des']
        );
        CONFIG::route_set('layout.header','pages.problems.all-ask','layout.footer',$page_arr);
    }
    public static function ques(){

        $id = CONFIG::getRouteRequest(2); 
        $data = "SELECT * FROM problems WHERE id='$id' LIMIT 1";
        $getAll = json_decode(APP_CRUD_DB::getAll($data),true);

        $page_arr = array(
            'title' => $getAll[0]['title'],
            'description' => $getAll[0]['content']
        );
        CONFIG::route_set('layout.header','pages.problems.ques','layout.footer',$page_arr);
    }

    public static function docs(){
        $page_arr = array(
            'title' => 'Docs',
            'description' => 'Docs - created by the users about codes, softwares, others, etc.'
        );
        CONFIG::route_set('layout.header','pages.docs.docs','layout.footer',$page_arr);
    }

    public static function my_docs(){
        $page_arr = array(
            'title' => 'My Docs',
            'description' => 'My Docs'
        );
        CONFIG::route_set('layout.header','pages.docs.my_docs','layout.footer',$page_arr);
    }

    public static function view_docs(){
        $docs_id = CONFIG::getRouteRequest(2);
        $data = "SELECT * FROM docs WHERE id='$docs_id' LIMIT 1";
        if(APP_CRUD_DB::checkData($data) == true){
            $getAll = json_decode(APP_CRUD_DB::getAll($data),true);
        }
        $page_arr = array(
            'title' => $getAll[0]['docs_title'],
            'description' => $getAll[0]['docs_des']
        );
        CONFIG::route_set('layout.header','pages.docs.view_docs','layout.footer',$page_arr);
    }

    public static function create_docs_page(){
        $page_arr = array(
            'title' => 'Create Docs Page',
            'description' => 'Create Docs Page'
        );
        CONFIG::route_set('layout.header','pages.docs.create_docs_page','layout.footer',$page_arr);
    }
    //----------------------------------------------------------------------
    //          PAGES ROUTER - END
    //----------------------------------------------------------------------

    //----------------------------------------------------------------------
    //          ADMIN PANEL ROUTER - START
    //----------------------------------------------------------------------

    //........ FOR ADMIN - LOGIN ..................................

    public static function adminlog(){
        $page_arr = array(
            'title' => 'Login',
            'description' => 'Admin - Login'
        );
        CONFIG::route_set('','admin.login','',$page_arr);
    }

    public static function admindash(){
        $page_arr = array(
            'title' => 'Admin',
            'description' => 'Admin - Dash'
        );
        CONFIG::route_set('admin.layout.header','admin.pages.dashboard','admin.layout.footer',$page_arr);
    }

    //............ FOR ADMIN - BLOGS ...................

    public static function adminblogs(){
        $page_arr = array(
            'title' => 'Admin',
            'description' => 'Admin - Dash'
        );
        CONFIG::route_set('admin.layout.header','admin.pages.blogs.home','admin.layout.footer',$page_arr);
    }

    public static function adminblogscreate(){
        $page_arr = array(
            'title' => 'Admin',
            'description' => 'Admin - Dash'
        );
        CONFIG::route_set('admin.layout.header','admin.pages.blogs.create','admin.layout.footer',$page_arr);
    }

    //........ FOR FUNCTIONS/ ..................................

    public static function func(){
        if(CONFIG::getRouteRequest(1) == "func"){
            global $page_exists;
            if(CONFIG::getRouteRequest(2) != ""){
                
                //LISTS YOUR FUNCTIONS/ .PHP HERE - START
                if(CONFIG::getRouteRequest(2) == 'blogs'){

                    CONFIG::include_func('blogs',function(){ self::page404(); });

                }else
                if(CONFIG::getRouteRequest(2) == 'auth'){

                    CONFIG::include_func('auth',function(){ self::page404(); });

                }else
                if(CONFIG::getRouteRequest(2) == 'problems'){

                    CONFIG::include_func('problems',function(){ self::page404(); });

                }else
                if(CONFIG::getRouteRequest(2) == 'docs'){

                    CONFIG::include_func('docs',function(){ self::page404(); });

                }else
                if(CONFIG::getRouteRequest(2) == 'delete'){

                    CONFIG::include_func('delete',function(){ self::page404(); });

                }
                else{
                    self::page404();
                }
                //LISTS YOUR FUNCTIONS/ .PHP HERE - END
                
            }else{
                self::page404();
            }
            $page_exists = 1;
        }else{
            self::page404();
        }
    }

    //........ FOR 404 error Page ..................................
    public static function page404(){
        $page_arr = array(
            'title' => 'Page Not found',
            'description' => 'The description of the Page'
        );
        CONFIG::route_set('layout.header','404.404','layout.footer',$page_arr);
    }

}
?>