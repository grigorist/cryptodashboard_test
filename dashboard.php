<div class="col-2" id="dashboard">
      <div class="dashboard">
        <div class="head-dashboard">
          <h2 class="title">Dashboard</h2>
          <button class="btnmanage" id="Manage" > Manage</button>
          <!-- HTML модального окна -->
    

<!-- HTML модального окна - конец -->
        </div>

        <div class="balance">
          <h3>Total Balance</h3>
          <h1 class="accbalance" action="balance">$62,340.48</h1>
          <div class="dash-stat">

            <div class="profit">
             <div class="coll-1">
              <p>Today</p>
              <li>+1,2%</li>

             </div>
             <div class="coll-2">
              <p>7 Days</p>
              <li>+4,3%</li>
             </div>
             <div class="coll-3">
              <p>30 Days</p>
              <li>-11,8%</li>
             </div>
            </div>

            <div class="cursors">
              <div class="coll-1">
                <img src="img/ADD.png" alt="">
                <p>Add</p>
  
               </div>
               <div class="coll-2">
                <img src="img/WITHDRAW.png" alt="">
                <p>Withdraw</p>
               </div>
               <div class="coll-3">
                <img src="img/CONVERT.png" alt="">
                <p>Convert</p>
               </div>
            </div>

          </div>

          <hr class="hr-line">
          <!--ГРАФИК-->

          <container class="container">
    <cards class="cards">
        <bitcoin style="width: 30%" class="btc">
            <card class="asset-info">
                <div class="title">
                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/btc.svg" width="15%"> 
                    <h1>Bitcoin</h1>
                </div>
                <div class="details">
                    <h2 class="asset-price" id="btcPrice"></h2>
                </div>
            </card>
            <canvas id="btcChart"></canvas>
        </bitcoin>

        <ethereum style="width: 30%" class="ethereum">
            <card class="asset-info">
                <div class="title">
                    <img src="https://s3.us-east-2.amazonaws.com/nomics-api/static/images/currencies/eth.svg" width="10%"> 
                    <h1>Ethereum</h1>
                </div>
                <div class="details">
                    <h2 class="asset-price" id="ethPrice"></h2>
                </div>
            </card>
            <canvas id="ethereumChart"></canvas>
        </ethereum>
    </cards>
  </container>

          <!--КОНЕЦ ГРАФИКА-->
          <div class="BTC">

          </div>
        </div>

      </div>
    </div>