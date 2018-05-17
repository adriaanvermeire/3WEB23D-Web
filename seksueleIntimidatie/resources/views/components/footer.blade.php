<footer>
  <div class="container h-100 d-flex flex-column justify-content-between">
    <div class="row">
      <div class="col-4">
        <h5 class="text-white">Dienstverlening</h5>

        <ul class='navigation'>
            <li>
              <a href="{!! route('what.index') !!}" title="Wat is intimidatie?" class="">
                Wat-is-het?
                <span class="fa fa-chevron-right"></span>
              </a>
            </li>
            <li>
              <a href="{!! route('reaction.index') !!}" title="Hoe reageer je op intimidatie?" class="">
                Hoe reageren?<span class="fa fa-chevron-right"></span>
              </a>
            </li>
            <li>
              <a href="{!! route('contact.index') !!}" title="Slachtoffer, getuige of dader?" class="">
                Waar kan je terecht?<span class="fa fa-chevron-right"></span>
              </a>
            </li>
            <li>
              <a href="{!! route('testimonials.index') !!}" title="Leer uit verhalen van anderen" class="">
                Hun verhalen<span class="fa fa-chevron-right"></span>
              </a>
            </li>
        </ul>
      </div>
      <div class="col-4 offset-4">
        <div class="contact-option">
          <h5 class="text-white">Contact met stad Antwerpen</h5>
          <a
          href="https://antwerpen.be/nl/info/5360f244b1a8a76a088b45c4/contacteer-stad-antwerpen-voor-meer-info"
          title="Overzicht contactmogelijkheden stad Antwerpen"
          target="_blank"
          class="btn buttonBlue"
          >
            <span class="fas fa-envelope-o"></span>
            Contacteer ons
          </a>
        </div>

        <div class="contact-option">
          <h5 class="text-white">Schrijf u in op onze nieuwsbrief</h5>
          <a
          href="https://antwerpen.be/nl/info/56cda8a3aba8a7f8158b4778"
          title="Schrijf u in op de antwerpen.be-nieuwsbrief"
          target="_blank"
          class="btn buttonBlue">
            Antwerpen.be - nieuwsbrief
          </a>
        </div>

        <div class="contact-option">
          <h5 class="text-white">Vind ons op</h5>
          <div class="socials">
            <a href="https://www.facebook.com/stad.antwerpen" class="btn bg-blue buttonRect facebook" target="_blank" rel="external">
              <i class="fab fa-facebook-f text-white fa-lg"></i>
            </a>
            <a href="https://twitter.com/Stad_Antwerpen" class="btn bg-blue buttonRect twitter" target="_blank" rel="external">
              <i class="fab fa-twitter text-white fa-lg"></i>
            </a>
            <a href="https://www.instagram.com/stad_antwerpen" class="btn bg-blue buttonRect instagram" target="_blank" rel="external">
              <i class="fab fa-instagram text-white fa-lg"></i>
            </a>
            <a href="https://www.linkedin.com/company/stad-antwerpen" class="btn bg-blue buttonRect linkedin" target="_blank" rel="external">
              <i class="fab fa-linkedin-in text-white fa-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid subfooter d-flex justify-content-between">
        <div class="blank"></div>
        <div class="info align-self-center">
          <span>© 2018 Antwerpen.be | </span>
          <a href="#">Privacy &amp; gebruiksvoorwaarden</a>
        </div>

        <div class="scroll-up bg-red h-100">
          <a href="#" data-scroll-to="body" data-speed="500">
            <i class="fas fa-arrow-up fa-2x"></i>
          </a>
        </div>
  </div>
</footer>
