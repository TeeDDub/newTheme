<?php get_header(); ?>


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div id="menu-wrap">
        <nav class="menu-tab">
          <button class="tab-button active" onclick="openTab(event,'coffee')">Coffee</button>
          <button class="tab-button" onclick="openTab(event,'tea')">Tea</button>
          <button class="tab-button" onclick="openTab(event,'bread')">Bread</button>
          <button class="tab-button" onclick="openTab(event,'wine')">Wine</button>
          <button class="tab-button" onclick="openTab(event,'plate')">Plate</button>
        </nav>
      </div>
      <div v-cloak id="contents-wrap">
        <section v-show="tabSelector=='coffee'" id="mCoffee" class="tabContent">
          <div class="mCard" v-for="item in coffeeItems">
            <h3>&#8226; {{item.name}}</h3>
          </div>
        </section>
        <section v-show="tabSelector=='tea'" id="mTea" class="tabContent">
          <div class="mCard" v-for="item in teaItems">
            <h3>&#8226; {{item.name}}</h3>
          </div>
        </section>
        <section v-show="tabSelector=='bread'" id="mBread" class="tabContent" >
          <div class="mCard" v-for="item in breadItems">
            <h3>&#8226; {{item.name}}</h3>
          </div>
        </section>
        <section v-show="tabSelector=='wine'" id="mWine" class="tabContent">
          <div class="mCard" v-for="item in wineItems">
            <img :src="item.imgsrc" class="wine">
            <div class="desc">
              <h3 class="wineName">{{item.name}}</h3>
              &nbsp;
              <p v-html="item.desc"></p>
            </div>
          </div>
        </section>
        <section v-show="tabSelector=='plate'" id="mPlate" class="tabContent">
          <div class="mCard" v-for="item in plateItems">
            <h3>&#8226; {{item.name}}</h3>
          </div>
        </section>
      </div>
    </main>
  </div>

<?php get_footer(); ?>

<style type="text/css">

[v-cloak] {
  display: none;
}

.mCard:first{
  margin-top: 0.3em;
}
nav.menu-tab{
  x`border-bottom: 1px solid #ccc;
  background-color: white;
}

#menu-wrap{
  width: 100%;
  position: fixed;
  left: 0;
  background-color: white;
}

#contents-wrap{
  width: auto;
}

nav.menu-tab button {
    background-color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    color: black;
}

nav.menu-tab button:hover {
    background-color: #ddd;
}
nav.menu-tab button.active {
    background-color: #ccc;
}

.tabContent {
    width: 100%;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

h3.wineName{
  text-decoration: underline;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

nav.menu-tab button {
  width:20%;
  min-width: 85px;
}
nav.menu-tab{
  overflow: hidden;
  width: 100%;
  position: static;
}
img{
  align-content: center;
}

.tabContent{
  -ms-overflow-style: none;
  height: auto;
  overflow: auto;
}


.wine{
  display: inline-block;
  width: auto;
  max-width: 200px;
  max-height: 200px;
  margin-right: 5px;
  flex:1;
}
.desc{
  display: inline-block;
  vertical-align: middle;
  flex:2;
}

.mCard{
  width: 90%;
  display: flex;
  vertical-align: middle;
  padding-left: 10px;
}

@media screen and (max-width: 425px){
  .mCard, .wine, .desc{
    display: block;
  }
  .wine{
    margin: 0 auto;
  }
}


</style>

<script>

var mainT = new Vue({
  el: '#contents-wrap',
  data: {
    tabSelector : 'coffee',

    coffeeItems: [
      {
        name: '드립 커피'
      },
      {
        name: '더치 커피'
      },
      {
        name: '라떼'
      },
      {
        name: '모카'
      },
      {
        name: '바닐라 라떼'
      },
      {
        name: '초코'
      }
    ],

    teaItems: [
      {
        name: '산펠레그리노'
      },
      {
        name: 'KUSMI 티'
      },
      {
        name: 'TWG 티'
      }
    ],

    breadItems: [
      {
        name:'스콘',
      },
      {
        name:'햄 치즈 토스트',
      },
      {
        name:'피낭시에',
      }
    ],
    wineItems: [
      {
        name:'더 롱독, 루즈',
        imgsrc:'https://i0.wp.com/pressimpress.kr/wp-content/uploads/2017/06/long-dog-louge.png?w=200',
        desc:"브랜드를 대표하는 더 롱독, 루즈는 트렌디한 패키지 디자인으로 유명합니다.<br>뿐만 아니라 가격에 비해 훌륭한 퍼포먼스로 와인업계의 트렌드로 자리 잡은 데일리 와인입니다.<br>잘익은 블랙베리, 자두의 풍성한 풍미와 섬세한 스파이시함이 뛰어난 밸런스를 이룹니다."
      },
      {
        name:'더 롱독, 블랑',
        imgsrc:'https://i0.wp.com/pressimpress.kr/wp-content/uploads/2017/06/blanc.png?w=200',
        desc:"더 롱독, 블랑은 흰색 과일의 상큼함, 싱그러운 허브 향이 은은하게 퍼지는 산뜻한 화이트 와인으로 기분을 유쾌하게 만들 정도로 산미가 인상적입니다.<br>런치나 디너, 카페와 레스토랑 등 시기와 장소에 구애받지 않고 언제 어디서든 어울리는 매력을 가진 와인입니다."
      },
      {
        name:'파시스, 불독',
        imgsrc:'https://i0.wp.com/pressimpress.kr/wp-content/uploads/2017/06/paxis-1.png?w=200',
        desc:"와인을 즐겁고 기쁘게 마셨으면 하는 마음이 담긴 파시스, 불독은 영국시장에서 크게 사랑받는 데일리 와인입니다.<br>잘익은 블랙베리, 딸기, 블루베리, 체리 사탕 등의 진한 과실향 뒤로 감초의 느낌을 주며 부드러운 피니시가 인상적입니다."
      },
      {
        name:'더 피노 프로젝트',
        imgsrc:'https://i0.wp.com/pressimpress.kr/wp-content/uploads/2017/06/pinot.png?w=200',
        desc:"'뉴요커 와인'으로 유명한 프리미엄 데일리 와인 더 피노 프로젝트는 합리적인 가격의 최고급 포노누아와인입니다.<br>적당한 바디감과 지속적으로 은은하게 느껴지는 오크의 향, 탄닌감 너무 달지 않은 과일 향, 이러한 틀을 받쳐주는 산미 등 훌륭한 조화를 이루고 있습니다."
      },
      {
        name:'마이클 몬다비 패밀리, 스펠바운드 샤도네이',
        imgsrc:'https://i0.wp.com/pressimpress.kr/wp-content/uploads/2017/06/spellbound-1.png?w=200',
        desc:"마이클 몬다비의 스펠바운드 시리즈는 과학적이고 체계적인 재배와 양조방식을 처음 도입했던 모다비 가문의 정체성을 잘 보여주는 와인입니다.<br>은은한 바닐라의 나무 향과 다소 묵직한 질감을 주는 뛰어난 퀄리티의 화이트 와인입니다.</p>"
      },
      {
        name:'로카 디 몬테그로시, 끼안티 클라시코',
        imgsrc:'https://i1.wp.com/pressimpress.kr/wp-content/uploads/2017/06/rocca-1.png?w=200',
        desc:"100% 유기농 재배를 고집하는 로카 디 몬테그로시의 작품 끼안티 클라시코는 역사가 깊은 끼안티 와인을 재해석한 와인으로 유명합니다.<br>체리, 자두향이 어우러져있으며, 풀바디한 와인이나 탄닌은 부드럽고 목넘김 뒤에 전해지는 향의 여운이 좋은 와인입니다."
      },
      {
        name:'몰리두커, 더 복서',
        imgsrc:'https://i2.wp.com/pressimpress.kr/wp-content/uploads/2017/06/boxer-1.png?w=200',
        desc:"몰리두커는 '왼손잡이' 라는 뜻의 호주식 표현으로 방부제인 이산화황이 들어가지 않는 친환경 와인입니다.<br>몰리두커, 더 복서는 쉬라즈 와인으로 깊은 과실의 풍미와 강한 탄닌감이 특징인 와인입니다."
      },
      {
        name:'럭스, 골드 까바 브륏',
        imgsrc:'https://i2.wp.com/pressimpress.kr/wp-content/uploads/2017/06/lux-1.png?w=200',
        desc:"스페인의 정통 스파클링 와인인 럭스, 골드까바 브륏은 어느 스파클링 와인보다도 신뢰를 받는 와인이며 '다이아몬드 와인'으로도 알려져 있습니다.<br>아몬드와 열대과일의 맛과 함께 드라이한 여운으로 깔끔한 끝맺음이 인상적입니다."
      }
    ],

    plateItems: [
      {
        name: '치즈 플레이트'
      },
      {
        name: '소세지 구이'
      }
    ]

  }
});

function openTab(evt, tabName) {
    mainT.tabSelector = tabName;

    tablinks = document.getElementsByClassName("tab-button");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    evt.currentTarget.className += " active";
}


</script>
