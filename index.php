<?php 

$title = "Front Page";
$page_name = "frontpage"; 
include('includes/header.php');

?>

<body>

  <div class="line"></div>
  
<!-- About Us Section -->

  <section class = "container about" id = "about">
    <div class="row">
      <div class="col-sm-12">
        <h3>About Us</h3>
        <p>Over the past 40 years the Law Offices of R. Richard Stone has established itself as a model for legal performance in the Greater Toronto Area. Our goal is to provde our clients with piece of mind and strong representation during this difficult period.</p>


        <p class = "aboutfull">
          Ralph Richard Stone was born in Toronto. He graduated from York University with a B.A. and was called to the Ontario Bar in 1975 after attending Osgoode Hall Law School. After articling, Richard established a private law practice as Stone and Yack with his long time friend and colleague Frederick A. Yack. In 2002, Richard Stone founded the law firm of the Law Offices of R. Richard Stone. For forty years, Richard has been involved in winning and resolving complex family disputes and criminal law cases. Richard has a reputation for achieving excellent results.
        </p>

      </div>
    </div>
  </section>

<!-- Learn More Button -->

  <div class="learnmore hideabout">
    <p>Hide Text</p>
  </div>

  <div class="learnmore" id="learnabout">
    <p>Learn More</p>
  </div>


  <div class="line"></div>

<!-- Areas of Focus Section -->

  <section class = "container focusareas" id="focus">
    <div class="row">
      <div class="col-sm-12">
        <h3>Areas Of Focus</h3>
      </div>

      <div class="focuslist col-sm-4" id = "criminal">
            <ul>
              <h4>Criminal</h4>
              <li>Violent Crimes</li>
              <li>Sex Crimes</li>
              <li>Drugs and Narcotic Charges</li>
              <li>Conspiracy Charges</li>
            </ul>
      </div>

      <div class="focuslist col-sm-4">
            <ul>
              <h4>Family</h4>
              <li>Separation Agreements</li>
              <li>Marriage Contracts</li>
              <li>Cohabitation Agreements</li>
              <li>Child Support</li>
            </ul>
      </div>

     <!--  <p class = "focusfull">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dicta, debitis tenetur reiciendis aliquam, quam magni ullam, incidunt perferendis libero minus eveniet. Ipsa esse doloribus id sit laudantium, recusandae iure. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos ipsa, nobis. Porro sapiente sunt error recusandae voluptate ab, incidunt eaque veniam, quae quidem veritatis quod. Ea facere, obcaecati. Ipsum, voluptas.
        </p>  -->

      <!-- <div class="focuslist col-sm-6 col-sm-offset-3">
        <ul>
              <h4>Criminal</h4>
              <li>Violent Crimes</li>
              <li>Sex Crimes</li>
              <li>Drugs and Narcotic Charges</li>
              <li>Conspiracy Charges</li>
            </ul>
        <ul>
              <h4>Family</h4>
              <li>Separation Agreements</li>
              <li>Marriage Contracts</li>
              <li>Cohabitation Agreements</li>
              <li>Child Support</li>
            </ul>
      </div -->

    </div>
  </section>

<!-- Learn More Button -->

<div class="learnmore hidefocus">
    <p>Hide Text</p>
  </div>

  <div class="learnmore" id = "learnfocus">
    <p>Learn More</p>
  </div>



  <div class="line"></div>

<!-- Testimonials Section -->

  <section class = "testimonials" id="test">
    <div class="container testoverlay">
      <div class="row">
        <div class="col-sm-12">
          <h3>Testimonials</h3>

          <div class="textslider">
            <div class="comment">
              <p>Richard Stone has been superb! His professional attitude and quick responses to my questions have helped me out of a hard place more than once. Without a question, I recommend him to anyone seeking help in a divorce. - E.H.</p>
            </div>
            <div class="comment">
              <p>Mr. Stone’s exceptional service is highly reputable. He’s honest, professional, and most of all, knowledgeable. His knowledge and experience definitely shows. - J.B.</p>
            </div>
            <div class="comment">
              <p>Mr. Stone is very professional, straightforward, and does exactly what he says he’ll do. - Eric P.</p>
            </div>
            <div class="comment">
              <p>Richard Stone is both knowledgeable and aware of family laws, and for that and more, I have recommended him to others. - Susie H.</p>
            </div>
            <div class="comment">
              <p>10 out of 10! Mr. Stone has been courteous, friendly and professional since the beginning. I have been extremely satisfied with his services, and definitely recommend him to others. - Chris S.</p>
            </div>
            <div class="comment">
              <p>Richard is very knowledgeable and respectful, and has always delivered as discussed. He’s honest, and not all about billing only. He works with you to end the case in the most efficient way. I definitely recommend Mr. Stone. - Itay A.</p>
            </div>
            <div class="comment">
              <p>When dealing with Richard and his assistant Irma, they were great at meeting their clients’ needs and being professional. - Karen B.</p>
            </div>
             <div class="comment">
              <p>I am completely satisfied and content with the settlement in the family law proceedings executed on December 7, 2007. Thank you very much! - Yan Zaslavski</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <div class="line"></div>

<!-- Contact Section -->

  <section class = "container contact" id="contact">
    <div class="row">
      <div class="col-sm-12">
        <h3>Contact</h3>
        <p>1120 Finch Avenue West</p>
        <p>Toronto, Ontario</p>
        <p>M3J 3H7</p>
        <div class="line"></div>
        <p>T: 416-667-9393</p>
        <p>Toll Free: 1-866-488-8088</p>
        <p>E:<a href="mailto:richard@rrichardstone.com?Subject=Hello" target="_top"> richard@rrichardstone.com</p></a>
      </div>
    </div>
  </section>

<!-- Google Map Insert -->

 <section class = "map" id="map-canvas"></section>

<?php include('includes/footer.php') ?>

</body>