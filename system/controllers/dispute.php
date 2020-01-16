<?php 
    class Dispute extends Controller
    {
    
        public function index($slug)
        {
            $this->view('home/dispute', $slug);
        }
    
    }
?>