<div class="col-3">
  <div class="info">
    <div class="search">
    <input type="search" placeholder="Search"> 
    <a href="#"><img src="img/Message.png" alt="Messages" width="25px"></a> <a href=""><img src="img/frame22.png" alt="Not" width="25px" style="padding-top:8px"> </a>
    <a href="#" id="Avatar" ><img src="img/avatar.png" id="Avatar"  alt="Avatar" class="imgava" width="30px" style="padding-buttom:7px"></a>
    </div>

    <!-- HTML модального окна -->
    <div id="myModal" class="modal">

 
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>ПРОФИЛЬ - $NAME</h2>
  </div>
  <div class="modal-body">

  <p>Баланс: $balance</p>
  <p>PNL за месяц: $PNL_MONTH</p>
  <p>PNL за день: $PNL-DAY</p>
  <p><a href="#">История транзакций</a></p>
  <p><a href="#">Перевод</a></p>
  <a href="#">Вывод</a>
  
  </div>
  <div class="modal-footer">
    <h3>$FOOTER - ВАШ ТЕКСТ</h3>
  </div>
</div>

</div>

<!-- HTML модального окна - конец -->
<!---КОНВЕРТК КЛАСС-->
    <div class="convert">
        <h3>Convert</h3>

        <!---инпут 1-->

    <div action="convert" class="convertform">
        <div class="firstcoin">
        <label for="city-select"><input type="coin" id="coin" placeholder="  0.001 BTC"><select name="city" id="city-select" onchange="update(event.target, 'coin')">
    <option value=" 0.001 BTC"><img src="img/btc.png" alt="#"> BTC</option>
    <option value=" 0.001 ETH">ETH</option>
    <option value=" 1 BUSD">BUSD</option>
    <option value=" 1 TRX">TRX</option>
    <option value=" 1 MATIC">MATIC</option>
  </select></label>
        </div>

        <!---инпут 2-->

        <div class="nextcoin">
        <label for="city-select"><input type="coin" id="coin2" placeholder="  0.001 ETH"><select name="city" id="city-select" onchange="update(event.target, 'coin2')">
    <option value=" 1 USDT"><img src="img/usdt.png" alt="#" width="15px"> USDT</option>
    <option value=" 1 USDC">USDC</option>
    <option value=" 1 APE">APE</option>
    <option value=" 1 SHIBO">SHIBO</option>
    <option value=" 1 KLAY">KLAY</option>
  </select></label>
        </div>

        <button>EXCHANGE</button>

</div>
    </div>

    <!--конверт конец-->

    <hr class="hr-line">

    <div class="news">
    <h3>News</h3>
    <p>Section in development</p>
  <div class="blockchain">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <center><lottie-player src="js/info.json" background="transparent"  speed="1"  style="width: 280px; height:170px;" loop autoplay> </lottie-player></center>
  <!--- <center><lottie-player src="js/info.json" background="transparent"  speed="1"  style="width: 280px; height:170px;"  loop controls autoplay> </lottie-player></center> ---->

  </div>
    
    </div>

  </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/js.js"></script>