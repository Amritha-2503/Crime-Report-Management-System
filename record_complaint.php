<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Speech to Text</title>
  </head>
  <body>
    <div class="container">
      <p class="heading">Record Complaint</p>
      <div class="options">
        <div class="anguage">
          <p>Language</p>
          <select name="input-language" id="language"></select>
        </div>
      </div>
      <div class="line"></div>
      <button class="btn record">
        <div class="icon">
          <ion-icon name="mic-outline"></ion-icon>
          <img src="bars.svg" alt="" />
        </div>
        <p>Start Listening</p>
      </button>
      <p class="heading">Result :</p>
      <div
        class="result"
        spellcheck="false"
        placeholder="Text will be shown here"
      >
        <p id="src" class="interim"></p>
      </div>
      <div class="buttons">
        <button class="btn clear">
          <ion-icon name="trash-outline"></ion-icon>
          <p>Clear</p>
        </button>
        <button id="convert" class="btn submit" disabled>
          <p>Translate</p>
        </button>
      </div>
      <div class="options">
              <div class="anguage">
              <p>Language to Translate</p>
                <select
                  id="lang_two"
                  name="lang_two">
                  <option value="AF">Afrikaans</option>
                  <option value="SQ">Albanian</option>
                  <option value="AR">Arabic</option>
                  <option value="HY">Armenian</option>
                  <option value="EU">Basque</option>
                  <option value="BN">Bengali</option>
                  <option value="BG">Bulgarian</option>
                  <option value="CA">Catalan</option>
                  <option value="KM">Cambodian</option>
                  <option value="ZH">Chinese (Mandarin)</option>
                  <option value="HR">Croatian</option>
                  <option value="CS">Czech</option>
                  <option value="DA">Danish</option>
                  <option value="NL">Dutch</option>
                  <option value="EN" selected>English</option>
                  <option value="ET">Estonian</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finnish</option>
                  <option value="FR">French</option>
                  <option value="KA">Georgian</option>
                  <option value="DE">German</option>
                  <option value="EL">Greek</option>
                  <option value="GU">Gujarati</option>
                  <option value="HE">Hebrew</option>
                  <option value="HI">Hindi</option>
                  <option value="HU">Hungarian</option>
                  <option value="IS">Icelandic</option>
                  <option value="ID">Indonesian</option>
                  <option value="GA">Irish</option>
                  <option value="IT">Italian</option>
                  <option value="JA">Japanese</option>
                  <option value="JW">Javanese</option>
                  <option value="KO">Korean</option>
                  <option value="LA">Latin</option>
                  <option value="LV">Latvian</option>
                  <option value="LT">Lithuanian</option>
                  <option value="MK">Macedonian</option>
                  <option value="MS">Malay</option>
                  <option value="ML">Malayalam</option>
                  <option value="MT">Maltese</option>
                  <option value="MI">Maori</option>
                  <option value="MR">Marathi</option>
                  <option value="MN">Mongolian</option>
                  <option value="NE">Nepali</option>
                  <option value="NO">Norwegian</option>
                  <option value="FA">Persian</option>
                  <option value="PL">Polish</option>
                  <option value="PT">Portuguese</option>
                  <option value="PA">Punjabi</option>
                  <option value="QU">Quechua</option>
                  <option value="RO">Romanian</option>
                  <option value="RU">Russian</option>
                  <option value="SM">Samoan</option>
                  <option value="SR">Serbian</option>
                  <option value="SK">Slovak</option>
                  <option value="SL">Slovenian</option>
                  <option value="ES">Spanish</option>
                  <option value="SW">Swahili</option>
                  <option value="SV">Swedish</option>
                  <option value="TA">Tamil</option>
                  <option value="TT">Tatar</option>
                  <option value="TE">Telugu</option>
                  <option value="TH">Thai</option>
                  <option value="BO">Tibetan</option>
                  <option value="TO">Tonga</option>
                  <option value="TR">Turkish</option>
                  <option value="UK">Ukrainian</option>
                  <option value="UR">Urdu</option>
                  <option value="UZ">Uzbek</option>
                  <option value="VI">Vietnamese</option>
                  <option value="CY">Welsh</option>
                  <option value="XH">Xhosa</option>
                </select>
              </div>
            </div>
            <br>
            <p class="heading">Translated Result :</p>
      <div
        id="textop"
        class="result"
        spellcheck="false"
        placeholder="Text will be shown here"
      >
        <p id="dest"></p>
      </div>
      <div class="buttons">
              <button
                onclick="send()"
                class="btn translate"
              >
                Register
              </button>
            </div>
            <script>
        function send() {
             var val = document.getElementById("dest").innerHTML;

            window.location.href = "complainer_page.php?val=" + encodeURIComponent(val);
        }
    </script>
    </div>

    <!-- IONICONS -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <!-- LANGUAGES -->
    <script src="languages.js"></script>

    <!-- SCRIPT -->
    <script src="script.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
