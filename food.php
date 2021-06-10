<style>
  .col-md-2{
        font-family: 'Indie Flower', cursive;
    }
    </style>
<?php
  
  class Foods{
   protected $collection_foods;
    public function __construct($collection_foods) {
     $this->collection_foods= $collection_foods; 
      }
       public function newFoods($foodTitle, $companyName, $price, $description, $img) {
        //check if the document exist by checking $foodTitle, $price
         $document = $this->collection_foods->findOne(['foodTitle'=>$foodTitle, 'companyName'=>$companyName], 
          ['projection'=>['_id'=>1] ]);
           //otherwise we just insert a new document
            if(is_null($document)) {
             $insertFoods = $this->collection_foods->insertOne([
              'foodTitle'=>$foodTitle,
               'companyName'=>$companyName,
                'price'=>$price,
                 'description'=>$description,
                  'image'=> new MongoDB\BSON\Binary(file_get_contents($img), MongoDB\BSON\Binary::TYPE_GENERIC),
                   'created_at'=> new MongoDB\BSON\UTCDateTime()
                     ]);
                      } else{
                       //if there is an ObjectId retrieved then we update that document for that specific ObjectId
                        $findandUpdate = $this->collection_foods->FindOneAndUpdate(['_id'=> new MongoDB\BSON\ObjectID($document->_id)], ['$set'=>[
                         'foodTitle'=>$foodTitle,
                          'companyName'=>$companyName,
                           'price'=>$price,
                           'description'=>$description,
                          'image'=> new MongoDB\BSON\Binary(file_get_contents($img), MongoDB\BSON\Binary::TYPE_GENERIC),
                         'update_at'=> new MongoDB\BSON\UTCDateTime()
                        ] ]);
                       }     
                      }
                     public function display($categ='', $cursor=NULL){
                    if($categ == '') {
                   $queryFoods = $this->collection_foods->find([], ['sort'=>['foodTitle'=>1]]);
                  } else {
                 $queryFoods = $this->collection_foods->find(['companyName'=> $categ], ['sort'=>['foodTitle'=>1]]);
                }
               if (!is_null($cursor)) $queryFoods = $cursor;
              foreach ($queryFoods as $val) {
             $title = (strlen($val->foodTitle) <=12) ? $val->foodTitle : substr($val->
            foodTitle, 0, 25 ).'...';
           $picture = $val->image;
          echo "<div class='col-md-2' style='width: 300px; margin-top:5px;'>
         <img src='data:jpeg;base64,". base64_encode($picture->getData()) ."' width='100%;' height: '100%'>
        <br>
       <strong class='titles' title= '" .$val->foodTitle ."'>" . $title . "</strong>
      <br>
     <strong>Price: ₱" . $val->price . ".00</strong>
    <br>
   <button class='col-md-12 btn btn-danger btn-sm' role='button' 
    value=" . $val->_id  . " 
     onclick='ajaxBuy(this.value)'> Buy </button>
        </div>";
         }
          }
           public function findFoodById($id) {
            $dataFood = $this->collection_foods->findOne(['_id'=> new MongoDB\BSON\ObjectID($id)], 
             ['projection'=> ['image'=>0]]);
              return [$dataFood->_id, $dataFood->foodTitle, $dataFood->price, 1 ];
               }
                }
                 ?>