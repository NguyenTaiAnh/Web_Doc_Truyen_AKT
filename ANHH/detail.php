<?php
    session_start();

if(isset($_SESSION['role']) && isset($_SESSION['email'])){
    $dangnhap = "<a class='nav-link' >".$_SESSION['email']."</a>";
    $dangky = "<a class='nav-link' href='./process/logout.php'>Đăng Xuất</a>";
}else{
    $dangnhap = "<a class='nav-link' href='login.php'>Đăng Nhập</a>";
    $dangky = "<a class='nav-link' href='signup.php'>Đăng Ký</a>";
}

    
    $tentruyen = $_GET['tentruyen'];
    $id_truyen = $_GET['id_truyen'];
    $ten_chuong = $_GET['ten_chuong'];
    $chap = $_GET['chap'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKT-Truyện</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <div class="container div_header">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="index.php" style="color: white;">AKT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle menu-style" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thể Loại
                  </a>
                </li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Thể Loại
                            </a>
                            <div class="dropdown-menu" style="width: 600px;" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="category.html">Action</a>
                                            <a class="dropdown-item" href="category.html">Another action</a>
                                            <a class="dropdown-item" href="category.html">Something else here</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="category.html">Action</a>
                                            <a class="dropdown-item" href="category.html">Another action</a>
                                            <a class="dropdown-item" href="category.html">Something else here</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a class="dropdown-item" href="category.html">Action</a>
                                            <a class="dropdown-item" href="category.html">Another action</a>
                                            <a class="dropdown-item" href="category.html">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="danhmuc.html">Truyện Đã Hoàn Thành</a>
                                <a class="dropdown-item" href="danhmuc.html">Truyện Mới</a>
                                <a class="dropdown-item" href="danhmuc.html">Truyện Mới Cập Nhật</a>

                            </div>
                        </li>

                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-5" type="search" placeholder="Tên truyện hoặc tên tác giả"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <ul class="navbar-nav ml-auto">


            <li class="nav-item">
              <!-- <a class="nav-link" href="login.php">Đăng Nhập</a> -->
              <?php echo $dangnhap; ?>
            </li>
            <li class="nav-item ">
              <!-- <a class="nav-link" href="signup.php">Đăng Ký</a> -->
              <?php echo $dangky; ?>
            </li>
          </ul>
                </div>

            </nav>
        </div>
    </header>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <div style="text-align: center; margin-bottom: 20px;">
                    <h2 style="text-transform: uppercase; text-align: center;"><?php echo $tentruyen;?> </h2>
                    <p class="chapter-name"><a href="">Chương <?php echo $chap; ?>: <?php echo $ten_chuong; ?></a></p>
                    <hr class="chapter-start">
                    <div>
                        <a href="#" class="btn btn-success btn-chapter-nav disabled">Chương Trước</a>
                        <select class="btn btn-success btn-chapter-nav form-control" id="dschuong" onChange="if(this.selectedIndex!=0)
                        self.location=this.options[this.selectedIndex].value">
                            <!-- <option value="Chuong 1">Chương 1: Tên chương</option> -->
                            

                        </select>
                        <a href="#" class="btn btn-success btn-chapter-nav ">Chương Tiếp</a>

                    </div>
                    <hr class="chapter-start">
                </div>
                <div class="chuong" id="noidung">
                   <!--  <p>
                        Thủy Ngọc thành ở ngoài tám mươi dặm, Lạc Sa sơn.
                        Giữa hè thời tiết, Liệt Dương như lửa, trong không khí tỏ khắp miệng núi lửa đặc hữu mùi lưu
                        huỳnh, màu đen núi lửa Thổ trên bò lổm ngổm hơn năm mươi người, lất pha lất phất, trẻ có già có,
                        từng cái từng cái đem thân hình ẩn giấu ở tạp nhạp bụi cỏ cùng thấp bé bụi cây khe hở trong lúc
                        đó, ngắm nhìn miệng núi lửa biên giới trên đất trống một cây tay áo xanh biếc đan xen thấp bé
                        bụi cây phía sau động đá, trong ánh mắt đều mang theo vài phần sợ hãi.
                        Bọn họ đỏ thắm tụ sắc cũ nát quần áo áo lót chỗ có một rộng lớn chữ khải “Hãm” tự, trái trước
                        ngực khẩu, thì lại có một viết ngoáy nho nhỏ “Tạ” tự —— những người này đều là Tạ gia Hãm trận
                        doanh thành viên. Tạ gia là Thủy Ngọc thành một trong ba gia tộc lớn, Hãm trận doanh là Tạ gia
                        một nhánh xa gần nghe tên đặc thù đội ngũ, nói trắng ra là chính là bia đỡ đạn. Trong đó thành
                        viên phần lớn là truyền thống gia nô, tù phạm, cùng với mua được nô lệ.
                       
                    </p> -->
                </div>
                <div style="text-align: center; margin-bottom: 20px;">

                    <hr class="chapter-start">
                    <div>
                        <a href="#" class="btn btn-success btn-chapter-nav disabled">Chương Trước</a>
                        <select class="btn btn-success btn-chapter-nav form-control" id="dschuong">
                            <option value="Chuong 1">Chương 1: Tên chương</option>
                            <option value="Chuong 1">Chương 1: Tên chương</option>
                            <option value="Chuong 1">Chương 1: Tên chương</option>
                            <option value="Chuong 1">Chương 1: Tên chương</option>
                            <option value="Chuong 1">Chương 1: Tên chương</option>
                        </select>
                        <a href="#" class="btn btn-success btn-chapter-nav ">Chương Tiếp</a>

                    </div>
                    <hr class="chapter-start">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding: 0;line-height: 30px;">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-12 ">
                        <p class="ft_title">Giới thiệu</p>
                        <p>
                            AKT-Truyện - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ
                            truyện mới
                            thuộc
                            các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách
                            nhanh nhất. Hỗ
                            trợ
                            mọi thiết bị như di động và máy tính bảng.
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-6">
                        <p class="ft_title">Thể loại</p>
                        <a href="#" class="cls_hover" style="color: white;">Tất cả thể loại</a>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-6">
                        <p class="ft_title">Thông tin liên hệ</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: akttruyen@gmail.com</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Phone: 01234567871</p>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js bootstrap -->
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
    <script src="public/js/index.js"></script>
   <!--  <script>
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
    </script> -->
    <script>
    const url2 ="./data/count_chap.php?id_truyen="+ <?php echo $id_truyen; ?>+"";
    fetch(url2).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);

            if(data.length > 0) {

              var temp2 = "";
              data.forEach((u)=> {

                
                            
            
                 temp2 += "<option value='detail.php?ten_chuong="+u.name_chap+"&id_truyen="+<?php echo $id_truyen;?>+"&tentruyen="+u.name+"&chap="+u.chap+"'>Chương "+u.chap+": "+u.name_chap+"</option>"                 

                })
            
            document.getElementById("dschuong").innerHTML = temp2;
            }
          }
          )
      }
      )
    </script>    

     <script>
    const url ="./data/content.php?chap="+<?php echo $chap;?>+"&id_truyen="+<?php echo $id_truyen; ?>+"";
    fetch(url).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);

            if(data.length > 0) {

              var temp = "";
              data.forEach((u)=> {

                
                            
            
                 temp += "<p>"+u.content+"</p>"                 

                })
            
            document.getElementById("noidung").innerHTML = temp;
            }
          }
          )
      }
      )
    </script>   
</body>

</html>