<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    class Page{
      private $page = "Test page";
      private $title = "Test page";
      private $year = 2021;
      private $copyright = "No copyright";
      private function addHeader(){
        print("Header : $this->page<br>");
        print("Title : $this->title<br>");
      }
      private function addFooter(){
        print("$this->copyright<br>");
        print("Year: $this->year<br>");
      }
      function addContent($content){
        print("$content<br>");
      }
      function get(){
        $this->addHeader();
        $this->addContent("This page no need content");
        $this->addFooter();
      }
    }
    ?> 
    <?php
    $page = new Page();
    $page->addContent("abc");
    $page->get();
    ?>
  </body>
</html>