<?php
    //to check if the user is log-in, if not it will redirect to the log-in page 
   session_start();
   include("connection.php");
   include("functions.php");
   $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gaklat BookShop</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="navigation_container">
      <img src="images/logo.png" class="logo" />
      <span class="logotext">Gaklat</span>
      <nav>
        <ul>
          <li><a href="#homeid">Home</a></li>
          <li><a href="#yourcart" class="buttons" onclick="YourCartFunction()">Your Cart</a></li>
          <li><a href="profilePage.php"><?php echo $user_data['user_name']; ?></a></li>
        </ul>
      </nav>
      <a href="profilePage.php"><img src="images/profileicon.png" class="icons" /></a>
    </div>
    <div class="general_container">
      <br /><br />
      <!--SIDEBAR-->
      
        <div class="sidebar_container">
            <nav>
              <ul>
                <li>
                  <a href="#newsid">What's New?</a>
                </li>
                <li><a href="#aboutid" >About Us</a></li>
                <li><a href="#partnersid">Partners</a></li>
                <li><a href="#productid">Products</a></li>
              </ul>
              <div class="social-links">
                <a href="https://www.facebook.com/" target="_blank">FACEBOOK</a>
                <a href="https://www.instagram.com/" target="_blank">INSTAGRAM</a>
                <a href="https://twitter.com/" target="_blank">TWITTER</a>
              </div>
            </nav>
          </div>
      <!--YOUR CART-->
      <div class="yourcart_container">
        <i class="fas fa-times"></i>
        <span class="text"><?php echo $user_data['user_name']; ?>'s Cart</span>
        <div class="yourcart_list">
          <div class="yourcart_products">
         <!--  <img src="images/halfblood_book.png" />
            <div class="details">
              <span class="title">The Half-Blood Prince</span>
              <div class="price">14.00</div>
              <div class="quantity">
                <button onclick="updateQuantity(-1)">-</button>
                <span class="quantity-value">1</span>
                <button onclick="updateQuantity(1)">+</button>
              </div>
            </div>--> 
          </div>
        </div>
        <div class="yourcart_bottompart">
          <span class="total">Total</span>
          <a href="" class="checkout">CheckOut</a>
        </div>
      </div>
      <!--MAIN BAR-->
      <div class="mainbar_container">
        <!--HOME PAGE-->
        <section id="homeid" class="home_container">
          <span class="header_text">Welcome to Gaklat BookShop!</span>
       
          <div class="welcome_content">
            <h2>New Books Featured!</h2>
           <span class="normaltext">Lorem ipsum dolor sit amet consectur adipiscing elit. Magnam deserunt nostrum accusamus. Nam alias sit necessitabus, aliquid ex minima at.</span>
           <br><br><a href="#productsid" class="buttons button2">Shop Now</a>
          </div>
          <div class="preview_content">
           
            <div class="book-wrapper">
              <a href="#newsid"  style="text-decoration: none;"><p class="previewtext">LATEST UPDATES</p><img src="images/whatsnew_preview.png" alt="whatsnew preview"></a>
              <a href="#aboutid"  style="text-decoration: none;"><p class="previewtext">OUR STORY</p><img src="images/aboutus_preview.png" alt="aboutus preview"></a>
              <a href="#partnersid"  style="text-decoration: none;"><p class="previewtext">OUR PARTNERS</p><img src="images/ourpartners_preview.png" alt="ourpartners preview"></a>
              <a href="#productid"  style="text-decoration: none;"><p class="previewtext">BROWSE BOOKS</p><img src="images/ourproducts_preview.png" alt="ourproducts preview"></a>
            </div>
      
        </div>
        </section>
        <!--NEWS PAGE-->
         <section id="newsid" class="news_container">
          <span class="header_text">What's New!</span>
          <div class="news-container">
            <div class="blog-section">
              <div class="cards">
                <div class="card">
                    <div class="image-section">
                      <img src="images/whatsnew_preview.png" alt="">
                    </div>
                    <div class="news-content">
                      <h4>Gaklat BookShop Celebrates Record-Breaking Sales Following 10th-Year Anniversary Book Convention</h4>
                      <p>New York, December 20, 2023 — The excitement generated by Gaklat BookShop's 10th-year anniversary book convention has transcended the event itself, translating into record-breaking sales. Customers flocked to the convention, taking advantage of exclusive discounts and engaging in the vibrant literary atmosphere. Gaklat BookShop expresses heartfelt gratitude to its loyal patrons for their overwhelming support, marking a spectacular milestone in the shop's journey and a promising outlook for the future.</p>
                      <a href="#whatsnew" class="buttons button3">Read More</a>
                    </div>
                    <div class="posted-date">
                      <p>Posted on December 20, 2023</p>
                    </div>
                </div>
                <div class="card">
                  <div class="image-section">
                    <img src="images/ourpartners_preview.png" alt="">
                  </div>
                  <div class="news-content">
                    <h4>Gaklat BookShop Forges Strategic Partnership with XYZ Publishing: A Win-Win for Book Lovers!</h4>
                    <p>New York, December 13,2023 — Gaklat BookShop, a pioneer in the local literary scene, is delighted to announce a strategic partnership with XYZ Publishing, a renowned publishing house known for its commitment to quality literature. This exciting collaboration aims to bring an even more diverse and curated selection of books to Gaklat's shelves. Customers can now expect an influx of new releases, exclusive editions, and author events, making Gaklat BookShop the ultimate destination for literary enthusiasts.</p>
                    <a href="#whatsnew" class="buttons button3">Read More</a>
                  </div>
                  <div class="posted-date">
                    <p>Posted on December 13, 2023</p>
                  </div>
              </div>
              <div class="card">
                <div class="image-section">
                  <img src="images/sales_preview.png" alt="">
                </div>
                <div class="news-content">
                  <h4>Sales Soar as Gaklat BookShop Embraces Digital Transformation</h4><br>
                  <p>New York, November 27,2023 — Gaklat BookShop's recent embrace of digital platforms has not only expanded its reach but also led to a significant surge in sales. The launch of the online bookstore has garnered an enthusiastic response from readers nationwide, with a notable increase in online orders and virtual engagement. Gaklat BookShop is thrilled to witness the growing community of online readers and is committed to providing an exceptional digital experience for all book lovers.</p>
                  <a href="#whatsnew" class="buttons button3">Read More</a>
                </div>
                <div class="posted-date">
                  <p>Posted on November 27, 2023</p>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        <!--ABOUT US PAGE-->
        
        <section id ="aboutid" class="aboutpage_container">
            <span class="header_text">About Us</span>
            <div class="aboutus-content">
              <img src="images/logo_w_noise.png" alt="">
              <span class="normaltext">Gaklat BookShop, a local gem in the heart of New York City, has been a haven for book lovers since its establishment in 2012. Known for its diverse collection, welcoming atmosphere, and commitment to promoting the love of reading, Gaklat has become a cherished destination for literary enthusiasts.</span>
            </div>
          <div class="aboutus-container2">
            <div class="aboutus-section">
              <div class="aboutus-cards">
                <div class="owners-card">
                    <img src="images/ownersprofile.png" alt="">
                    <div class="owners-content">
                      <h2>Owner</h2>
                      <p>Shanley Mae Sebial</p>
                      <div class="quotebox">
                      <span class ="quotetext">"At Gaklat Studio, we don't just create stories- we transport readers to new worlds and ignite imaginations with immersive reading experiences that they'll never forget."</span>
                    </div>
                     </div>
                </div>
                <div class="owners-card">
                  <div class="image-section">
                    <img src="images/milet.png" alt="">
                  </div>
                  <div class="owners-content">
                    <h2>Co-Owner</h2>
                    <p>Milet</p>
                    <div class="quotebox">
                    <span class ="quotetext">"Books are not just collections of pages; they are portals to different worlds. As Co-Owner and Book Curator, I strive to create experiences that bring those worlds to life."</span>
                    </div>
                  </div>
              </div>
              <div class="owners-card">
                <div class="image-section">
                  <img src="images/lizcallaway.png" alt="">
                </div>
                <div class="owners-content">
                  <h2>Co-Owner</h2>
                  <p>Liz Callaway</p>
                  <div class="quotebox">
                  <span class ="quotetext">"In the heart of every community lies a shared love for stories. As Manager, I am dedicated to nurturing that love and building bridges through the magic of literature."</span>
                </div>
              </div>
               </div>
               </div>   
            </div>
          </div>
        </section>
         <!--PARTNERS PAGE-->
         <section id="partnersid">
          <span class="header_text">Our Partners</span>
          <div class="partners-container">
            <div class="partners-section">
              <div class="partners-cards">
                <div class="partner-card">
                    <img src="images/bloomsbury_logo.png" alt="">
                    <div class="partner-content">
                      <a href="https://www.bloomsbury.com/uk/" target="_blank">  <h2>Bloomsbury Publishing UK</h2></a>
                      <div class="quotebox">
                      <span class ="quotetext">"Gaklat Bookshop is a literary haven, aligning seamlessly with our mission at Bloomsbury Publishing."</span>
                     </div>
                    </div>
                </div>
                <div class="partner-card">
                  <div class="image-section">
                    <img src="images/jkrowling.png" alt="">
                  </div>
                  <div class="partner-content">
                    <a href="https://www.jkrowling.com/" target="_blank"> <h2>Jk Rowling</h2></a><br>
                    <div class="quotebox">
                    <span class ="quotetext">"Gaklat Bookshop understands the magic of storytelling, making them an invaluable ally in bringing literature joy to readers."</span>
                    </div>
                  </div>
              </div>
              <div class="partner-card">
                <div class="image-section">
                  <img src="images/penguin_logo.png" alt="">
                </div>
                <div class="partner-content">
                  <a href="https://www.penguinrandomhouse.com/" target="_blank"> <h2>Penguin Random House</h2></a>
                  <div class="quotebox">
                  <span class ="quotetext">"Gaklat Bookshop stands out as a beacon for literary excellence, delivering top-notch books and fostering a culture of reading."</span>
                 </div>
                </div>
            </div>
            <div class="partner-card">
              <div class="image-section">
              <img src="images/yenpress_logo.png" alt="">
            </div>
              <div class="partner-content">
                <a href="https://yenpress.com/" target="_blank"> <h2>Yen Press</h2></a><br>
                <div class="quotebox">
                <span class ="quotetext">"Gaklat Bookshop is an ideal collaborator, sharing our passion for diverse storytelling and commitment to quality manga."</span>
               </div>
              </div>
          </div>
            </div>
          </div>
        </section>
        <!--PRODUCTS PAGE-->
        <section id="productid" class="products_container">
          <span class="header_text">Products</span>
        
            <div class="featuredbook_container">
              <div class="previewtext">Featured</div>
              <a href="#products" class="featuredbook" data-name="p-8"
                ><img
                  src="images/dancewdragons_preview.png"
                  alt="dancewdragons_preview"
              /></a>
              <a href="#products" class="featuredbook" data-name="p-9"
                ><img
                  src="images/orderofphoenix_preview.png"
                  alt="orderofphoenix_preview"
              /></a>
              <a href="#products" class="featuredbook" data-name="p-10"
                ><img
                  src="images/ourproducts_preview.png"
                  alt="littleredridinghood_preview"
              /></a><br>
              <div class="previewtext">Collections</div>
            </div>
          <div class="productlist_container">
            <div class="product" data-name="p-1">
              <img src="images/halfblood_book.png" alt="halfblood_book cover" />
              <div class="book-title">The Half-Blood Prince</div>
              <div class="author_date">J.K Rowling ∙2005</div>
            </div>
            <div class="product" data-name="p-2">
              <img src="images/asong_book.png" alt="asong_book cover" />
              <div class="book-title">A Song of Ice & Fire</div>
              <div class="author_date">George R.R. Martin ∙2011</div>
            </div>
            <div class="product" data-name="p-3">
              <img
                src="images/giftofbattle_book.png"
                alt="giftofbattle_book cover"
              />
              <div class="book-title">The Gift of Battle</div>
              <div class="author_date">Morgan Rice ∙2014</div>
            </div>
            <div class="product" data-name="p-4">
              <img
                src="images/poseidonawake_book.png"
                alt="poseidonswake_book cover"
              />
              <div class="book-title">Poseidon's Wake</div>
              <div class="author_date">Alastair Reynolds ∙2015</div>
            </div>
            <div class="product" data-name="p-5">
              <img
                src="images/deathlyhallows_book.png"
                alt="deathlyhallows_book cover"
              />
              <div class="book-title">The Deathly Hallows</div>
              <div class="author_date">J.K. Rowling ∙2007</div>
            </div>
            <div class="product" data-name="p-6">
              <img
                src="images/gobletoffire_book.png"
                alt="gobletoffire_book cover"
              />
              <div class="book-title">The Goblet of Fire</div>
              <div class="author_date">J.K. Rowling ∙2005</div>
            </div>
            <div class="product" data-name="p-7">
              <img
                src="images/stormofswords_book.png"
                alt="stormofswords_book cover"
              />
              <div class="book-title">A Storm of Swords</div>
              <div class="author_date">George R.R. Martin ∙2014</div>
            </div>
          </div>
        </section>
         <!--PRODUCTS PREVIEW DETAILS-->
    <div class="products-preview">
        <div class="preview" data-target="p-1">
           <i class="fas fa-times"></i>
           <img src="images/halfblood_book.png" alt="halfblood_book cover" />
           <h3>The Half-Blood Prince</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$14.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-1')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
     
        <div class="preview" data-target="p-2">
           <i class="fas fa-times"></i>
           <img src="images/asong_book.png" alt="asong_book cover" />
           <h3>A Song of Ice and Fire</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$8.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-2')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
     
        <div class="preview" data-target="p-3">
           <i class="fas fa-times"></i>
           <img
              src="images/giftofbattle_book.png"
              alt="giftofbattle_book cover"
            />
           <h3>The Gift of Battle</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$12.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-3')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
     
        <div class="preview" data-target="p-4">
          
           <i class="fas fa-times"></i>
           <img
          src="images/poseidonawake_book.png"
          alt="poseidonswake_book cover"
        />
           <h3>Poseidon's Wake</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$8.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-4')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
     
        <div class="preview" data-target="p-5">
          
           <i class="fas fa-times"></i>
           <img
          src="images/deathlyhallows_book.png"
          alt="deathlyhallows_book cover"
        />
           <h3>Deathly Hallows</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$16.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-5')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
     
        <div class="preview" data-target="p-6">
           <i class="fas fa-times"></i>
           <img
           src="images/gobletoffire_book.png"
           alt="gobletoffire_book cover"
         />
           <h3>The Goblets of Fire</h3>
           <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
              <span>( 250 )</span>
           </div>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
           <div class="price">$11.00</div>
           <div class="prevbutton">
            <button onclick="AddedButton('p-6')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
        </div>
        <div class="preview" data-target="p-7">
          <i class="fas fa-times"></i>
          <img
              src="images/stormofswords_book.png"
              alt="stormofswords_book cover"
            />
          <h3>A Storm Swords</h3>
          <div class="stars">
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star"></i>
             <i class="fas fa-star-half-alt"></i>
             <span>( 250 )</span>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
          <div class="price">$12.00</div>
          <div class="prevbutton">
            <button onclick="AddedButton('p-7')" class="buttons addtocartbutton" >Add to Cart</button>
          </div>
       </div>
       <div class="preview" data-target="p-8">
        <i class="fas fa-times"></i>
        <img
            src="images/dancewdragons_book.png"
            alt="dancewdragons_book cover"
          />
        <h3>Dance with Dragons</h3>
        <div class="stars">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star-half-alt"></i>
           <span>( 250 )</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
        <div class="price">$11.00</div>
        <div class="prevbutton">
          <button onclick="AddedButton('p-8')" class="buttons addtocartbutton" >Add to Cart</button>
        </div>
     </div>
     <div class="preview" data-target="p-9">
      <i class="fas fa-times"></i>
      <img
          src="images/orderofphoenix_book.png"
          alt="orderofphoenix_book cover"
        />
      <h3>Order of the Phoenix</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$13.00</div>
      <div class="prevbutton">
        <button onclick="AddedButton('p-9')" class="buttons addtocartbutton" >Add to Cart</button>
      </div>
   </div>
   <div class="preview" data-target="p-10">
    <i class="fas fa-times"></i>
    <img
        src="images/littlered.jpg"
        alt="littleredridinghood_cover"
      />
    <h3>Little Red Riding Hood</h3>
    <div class="stars">
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
       <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$12.00</div>
    <div class="prevbutton">
      <button onclick="AddedButton('p-10')" class="buttons addtocartbutton" >Add to Cart</button>
    </div>
  </div>
      </div>
    </div>

    <script src="script1.js"></script>          
  </body>
</html>

