<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
    integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
  <script src="./public/js/index.js"></script>
  

<!-- 
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script>
    const url ="./entity/theloai.php";
    fetch(url).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);

            if(data.length > 0) {

              var temp = "";
              data.forEach((u)=> {
                // <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                
                temp += "<p  class='col-md-6 col-lg-6 col-6' style='text-align: center;line-height: 25px;'>"+ "<a href= 'category.html' class='cls_hover'> "+ u.name +"</a>"+"</p>";

                })
            
            document.getElementById("data").innerHTML = temp;
            }
          }
          )
      }
      )
  </script> -->
  <!-- Show list truyen -->
  <script>
    const url ="./data/showlist.php";
    fetch(url).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);

            if(data.length > 0) {

              var temp = "";
              data.forEach((u)=> {
            
              
                
              temp += "<div class='col-sm-3 col-3 col-md-3 col-lg-3' style='padding: 0px;'>" + "<div class='nh-thumb nh-thumb--72  mr-3'>" + "<img src='"+u.hinhanh+"' alt='' class='edit_img' width='100'> </div></div>"
              
              temp += "<div class='col-md-6 col-lg-6 col-sm-6 col-6' style='margin: auto;> <div> <p class='name_stories'><a href='story.php?id_truyen="+u.id_truyen+"' class='new_story'><i class='fa fa-book' aria-hidden='true'></i>"+u.name+"</a></p> <p><a href='' class='new_story'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>"+u.ten+"</a></p></div></div>" 
              temp += "<div class='col-md-3 col-lg-3 col-3 col-sm-3' style='margin: auto;'><div><p class='chapter'><a href='' class='new_story'>"+u.time_cre+"</a></p></div></div> "

                })
            
            document.getElementById("showlist").innerHTML = temp;
            }
          }
          )
      }
      )
    
  </script>
  

</body>

</html>