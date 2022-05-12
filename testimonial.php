<div class="container-fluid mt-5" style="background-color:#487289" id="feedback">
  <h1 class="text-center testheading p-4">Student's feedback</h1>
  <div class="row">
    <div class="col-md-6 text-center">
      <!-- <div id="testimonial-slider" class="owl-carousel">
          <div class="testimonial">
            <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia autem ullam eos s</p>
            <div class="pic">
              <img src="image/5.jpg" alt="" srcset="">
            </div>
            <div class="testimonial-prof">
              <h4>abc</h4>
              <small>Web Developer</small>
            </div>
          </div>
        </div> -->
      <?php
      $sql = "select s.name, s.profession, f.feedback from student as s join feedback as f on s.id=f.stu_id";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo $row['name'] . $row['profession'] . $row['feedback'] . "<br>";
        }
      }
      ?>

      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active " data-bs-interval="10000">
            <div class="carousel  d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item " data-bs-interval="2000">
            <div class="carousel  d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="carousel  d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

</div>