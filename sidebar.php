  <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
 
                 <?php 
                      $mydb->setQuery("SELECT * FROM `tblcategory`");
                      $cur = $mydb->loadResultList();
                     foreach ($cur as $result) {
                      echo ' <div class="categ panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></h4>
                            </div>
                          </div>';
                      }
                  ?>
              
            </div><!--/category-products-->
 
           
              <img src="images/home/B2.jpg" alt="" style="height:130px; align-item: fixed;"/>
              <br>
              <img src="images/home/ONTEl.jpg" alt="" style="height:183px; align-item: fixed;"/>
          
          
          </div>

 