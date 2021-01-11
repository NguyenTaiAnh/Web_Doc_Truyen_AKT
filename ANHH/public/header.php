<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AKT-Truyện</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <script>
    const url1 ="./entity/theloai.php";
    fetch(url1).then(
      res=>{
        res.json().then(
          data=>{
            console.log(data);

            if(data.length > 0) s

              var temp1 = "";
              data.forEach((u)=> {
                
                temp1+= " <div class='col-md-4'>"+"<a class='dropdown-item' href='category.html'>" + u.name +"</a>"+"</div>"

                })
            
            document.getElementById("data2").innerHTML = temp1;
            }
          }
          )
      }
      )
  </script> -->

</head>

<body>
  <header>
    <div class="container div_header">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="./index.php" style="color: white;">AKT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">Trang chủ <span class="sr-only">(current)</span></a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle menu-style" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Thể Loại
              </a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" >
                Thể Loại
              </a>
              <div class="dropdown-menu" style="width: 600px;" aria-labelledby="navbarDropdown" >
                <div class="container">
                  <div class="row" id="data2" >
                    <!-- <div class="col-md-4">
                      <a class="dropdown-item" href="category.html">Action</a>
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
                    </div> -->
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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
              <a class="nav-link" href="login.html">Đăng Nhập</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="signup.html">Đăng Ký</a>
            </li>
          </ul>
        </div>
        <!-- <div class="dropdown-menu2" aria-labelledby="navbarDropdown">

          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <a class="dropdown-item" href="category.html">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="category.html">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
              <div class="col-md-4">
                <a class="dropdown-item" href="category.html">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
        </div> -->
      </nav>
    </div>
  </header>