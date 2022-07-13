To start this projects on your locale machine you neeed to:

  1. clone the project to download its content:
  
      cd projects/
      
      git clone ...
      
  2. give rights on the var folder
  
  3. run docker
  
    docker-compose up -d
  
  3. make Composer install the project's dependencies
  
     cd my-project/
     docker-compose exec php composer install
     
  4. In the hosts file (/etc/hosts), specify local access by URL
      
      127.0.1.1 	my-contact-book.info
      
      And don't forget to save file!
      
  That's it!
