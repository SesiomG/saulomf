<!DOCTYPE html>


<html>
    <head>
        <title>Atividade 2</title>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <link href="css/bootstrap.min.css rel="stylesheet"
         type="text/css"/>
         
         <script src="js/jqurey-3.3.1.min.js" type="text/javascript">
          </script>
          
          <script type="text/javascript">
              
           (document).ready(function){
               
            ('butto').eq(0).click(function(){
                
              ('input').hide(3000);
              
              
           
           });
               ('butto').eq (1).clik(function(){
                   
                  ('input').show(3000);
                  
                  
                
               });
                 // botões do texto
                 ('button').eq(2).click(function(){
                     
                     ('p').fadeOut(3000);
                     
                  
                  
                 }); 
                    ('p').fadeIn(3000);
                    
                    
    });
    
    
    //botões do quadrado
    
    ('button').eq(4).click(function(){
        
        
        ('div#quadrado').slideUp (3000);
        
        
        
    });
      
        ('button').eq(5).click(function(){
         
         
            </script>
        
    </head>
    <body>
        <?php
        require_once 'db_class';
        
        ?>
        <div class="container"   >
        
        
            <div class="jumbotron">  <center> <h1> jQuery   </h1>  </center>   </div>
            
            
            <div class="row"> <!-- row dos elementos-->
                
                <div class="col-md-4">     
                    
                    <input  type="text" placeholder="digite o seu nome"  class="form-control" /> 
                    <hr/>
                      <input  type="email" placeholder="Digite o seu e-mail"  class="form-control"/>  
                
                
                </div>
                    <div class="col-md-4">  
                    
                      
                        
                        <p>  All HTML elements can be considered as boxes. In CSS, the term "box model" is used when talking about design and layout.

The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model:   </p>
                    </div>
                <div class="col-md-4">  <div  id="quadrado" style="background-color: green; width: 1500px;height: 150px;"> b </div>   </div>
                
                
                            
                
            </div>
            
            <hr/>
            
              <div class="row"> <!-- row dos botões-->
                
                  <div class="col-md-4">  
                        <button  class="btn btn-danger">  Ocultar formulário   </button> 
                      
                      <button  class="btn  btn-primary" >   Aparecer Formulário  </button> 
                  </div>
                  
                   <div class="col-md-4">  
                   
                    <button  class="btn btn-danger">  Ocultar texto  </button> 
                      
                      <button  class="btn  btn-primary" >   Aparecer texto  </button> 
                   
                   </div>
                   
                    <div class="col-md-4">  
                    
                    
                     <button  class="btn btn-danger">  Ocultar quadrado   </button> 
                      
                      <button  class="btn  btn-primary" >   Aparecer quadrado  </button> 
                    
                    
                    </div>
                
            </div>
            
            
            
            
            
            
            
            
        
        
        
        
        </div>
    </body>
</html>