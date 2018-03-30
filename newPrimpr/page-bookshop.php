<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div id="menu-wrap">
        <nav class="menu-tab">
          <button class="tab-button active" onclick="openTab(event,'arch')">건축</button>
        </nav>
      </div>
      <div v-cloak id="contents-wrap">
        <section v-show="tabSelector=='arch'" id="mArch" class="tabContent">
          <div class="mCard" v-for="item in archItems" @click="bookDetails(item)">
              <img :src="item.imgsrc" class="bCover">
              <div class="desc">
                <h3 v-html="item.title"></h3>
                <h5>가격 : {{item.price}}원</h5>
              </div>
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

nav.menu-tab{
  position: fixed;
  border-bottom: 1px solid #ccc;
  background-color: white;
}

#menu-wrap{
  width: auto;
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
    padding: 15px 30px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

h3{
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

.bCover{
  width: auto;
  height: 200px;
  margin-right: 5px;
}
.desc{
  word-wrap: normal;
  vertical-align: middle;
}

.mCard{
  width: 30%;
  height: 400px;
  display: inline-block;
  vertical-align: middle;
  padding: 1%;
  text-align: center;
  cursor: pointer;
}

</style>

<script>

var mainT = new Vue({
  el: '#contents-wrap',
  data: {
    tabSelector : 'arch',

    archItems: [
      {
        title:'김수근, 사이를 잇는 사람의 가치',
        date:'2017-05-01',
        url:'http://pressimpress.kr/bookshop/%EA%B9%80%EC%88%98%EA%B7%BC-%EC%82%AC%EC%9D%B4%EB%A5%BC-%EC%9E%87%EB%8A%94-%EC%82%AC%EB%9E%8C%EC%9D%98-%EA%B0%80%EC%B9%98',
        price:20000,
        imgsrc:'http://image.kyobobook.co.kr/images/book/xlarge/153/x9791195057153.jpg',
        desc:"『김수근문화재단에서 펴낸 『김수근, 사이를 잇는 사람의 가치』. 김수근의 대표작품 중 궁간 사옥 등의 다양한 작품들을 살펴보고 그의 작품과 예술 행보가 어떻게 발전했는지 알아볼 수 있도록 구성했다."
      },
      {
        title:'좋은 길은 좁을수록 좋고,<br>나쁜 길은 넓을수록 좋다',
        date:'2016-06-14',
        url:' http://pressimpress.kr/bookshop/좋은-길은-좁을수록-좋고-나쁜-길은-넓을수록-좋다',
        price:12000,
        imgsrc:'http://image.kyobobook.co.kr/images/book/xlarge/146/x9791195057146.jpg',
        desc:"김수근의 공간인생론에 대한 전반적인 내용이 담겨 있으며 ‘가슴 메웠던 여자 담임 선생님’, ‘손 닿는 곳에 책이 있는 집’, ‘지적 주거’, ‘도시는 24시간의 예술’, ‘건축가는 전문가가 아니다’, ‘공간인생론’으로 총 6주제로 구성돼 있다."
      },
      {
        title:'2016 김수근 건축상',
        date:'2016-06-14',
        url:'http://pressimpress.kr/bookshop/김수근-건축상-2016',
        price:12000,
        imgsrc:'http://image.kyobobook.co.kr/images/book/xlarge/139/x9791195057139.jpg',
        desc:"『김수근 건축상(2016)』은 2016년 김수근 건축상의 시상방안 변경사항과 김수근 프리뷰상 심사평을 담았다. 또한 김수근 프리뷰상과 준공작에 대한 작품 내용이 담겨 있다."
      },
      {
        title:'2015 김수근 건축상',
        date:'2015-06-14',
        url:'http://pressimpress.kr/bookshop/김수근-건축상-2015',
        price:22000,
        imgsrc:'http://image.kyobobook.co.kr/images/book/xlarge/122/x9791195057122.jpg',
        desc:"[김수근 건축상(2015)]은 한국 건축문화를 사랑하는 동시에 세계적으로 가꾸고 키우고자 남다른 정열을 기울인 건축가 김수근의 건축 정신을 새기며 그가 남긴 뜻을 이어가기 위해 제정된 김수근 건축상의 수상작품들을 모아놓은 책이다."
      },
      {
        title:'2014 김수근 건축상',
        date:'2014-06-14',
        url:'http://pressimpress.kr/bookshop/%EA%B9%80%EC%88%98%EA%B7%BC-%EA%B1%B4%EC%B6%95%EC%83%81-2014',
        price:22000,
        imgsrc:'http://image.kyobobook.co.kr/images/book/xlarge/115/x9791195057115.jpg',
        desc:"『김수근 건축상(2014)』은 2014년 김수근 프리뷰상으로 선정된 다섯 작품을 수록한 책이다. 동화고 삼각학교, 만리동 예술인 협동조합형 공공주택, 삼하유치원, 6x6 주택, 파주 청석교회 등의 작품을 통해 우리 건축의 미래를 엿볼 수 있을 것이다."
      }
    ]
  },
  methods:{
    bookDetails(item){
      window.location.href = item.url;
    }
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
