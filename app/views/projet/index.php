<?php $this->view("projet/header",$data);?>
<body>



      <!-- MAIN -->
      <main role="main">
       
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Be More with Less</h1>
              
              
              
              <?php
              if(isset($_SESSION['user_name'])==NULL){    
                // Haven't log in
                echo "You haven't log in";
              }else{
                // Logged in
                echo "You are log in : <a href='http://localhost/prj/public/user_ctrl'>clic here</a>";
              }
              ?>
              
            </div>  
          </header>

          <?php if(is_array($data['posts'])): ?>
          
          <?php foreach($data['posts'] as $row): ?>

            <div class="background-white full-width"> 
              <div class="s-12 m-6 l-five">
                <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT.'single_post/' .$row->url_address; ?>/" title="Portfolio Image">
                  <div class="image-hover-overlay background-primary"> 
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h3 class="text-white text-size-20 margin-bottom-10"><?=$row->title?></h3>
                      <p class="text-white text-size-14 margin-bottom-20"><?=$row->description?></p>  
                    </div> 
                  </div> 
                  <img class="full-img" src="<?=ROOT. $row->image?>" alt=""/>
                </a>	
              </div>

          <?php endforeach; ?>
          <?php endif; ?>

          </div>  
        </article>
        <br>
        <section>
          <a href="<?=$data['prev_page']?>"><input type="button" class="s-12 submit-form button background-primary text-white" style="width: 200px;"  value="Prev"></a>
          <a href="<?=$data['next_page']?>"><input type="button" class="s-12 submit-form button background-primary text-white" style="width: 200px; float: right;"  value="Next"></a>
        </section>
      </main>

<?php $this->view("projet/footer",$data);?>