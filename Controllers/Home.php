<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero voluptatibus expedita illo vitae perspiciatis reprehenderit. Vero deleniti laudantium, perferendis ut ipsa incidunt sapiente assumenda at vel repudiandae deserunt, quidem exercitationem!";
            $this->views->getView($this,"home",$data);
        }        
    }
?>