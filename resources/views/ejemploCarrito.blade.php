@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/qq7886/pen/zBGrwq?limit=all&page=7&q=shop" />

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<style class="cp-pen-styles">html, body {
  background-color: #eee;
  font-family: calibri, sans-serif;
}

#app {
  width: 760px;
  margin: 20px auto;
}
#app #product .box {
  width: 230px;
  background-color: #fff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  display: inline-block;
  margin: 0 10px;
  position: relative;
}
#app #product .box img {
  width: 230px;
}
#app #product .box i {
  width: 50px;
  height: 50px;
  background: #ED277F;
  color: #ffffff;
  border-radius: 25px;
  text-align: center;
  line-height: 50px;
  font-size: 1.4rem;
  position: absolute;
  right: 20px;
  top: 150px;
  box-shadow: 0 0 4px 2px rgba(80, 80, 80, 0.1);
  cursor: pointer;
  transition: all 0.3s;
}
#app #product .box i:hover {
  transform: scale(1.05);
}
#app #product .box h2 {
  margin-left: 20px;
}
#app #product .box p {
  margin-left: 20px;
}
#app #cart {
  margin-top: 50px;
  overflow: hidden;
}
#app #cart #head {
  width: 100%;
  border-bottom: 1px solid #BFBFBF;
  height: 40px;
  display: block;
}
#app #cart #head h3 {
  display: inline-block;
  line-height: 40px;
  margin: 0;
}
#app #cart #head #price {
  display: inline-block;
  color: #777777;
  margin-left: 200px;
  line-height: 40px;
}
#app #cart #head #quantity {
  display: inline-block;
  color: #777777;
  margin-left: 100px;
  line-height: 40px;
}
#app #cart #head #total {
  display: inline-block;
  color: #777777;
  line-height: 40px;
  float: right;
}
#app #cart .row {
  width: 100%;
  border-bottom: 1px solid #BFBFBF;
  overflow: hidden;
  padding: 10px 0;
  display: block;
  flaot: left;
}
#app #cart .row img {
  height: 100px;
  float: left;
}
#app #cart .row h4 {
  float: left;
  margin: 0;
  line-height: 100px;
  margin-left: 20px;
  width: 100px;
}
#app #cart .row p {
  float: left;
  margin: 0;
  width: 80px;
  line-height: 100px;
  margin-left: 35px;
  text-align: center;
}
#app #cart .row .qty-minus {
  float: left;
  width: 20px;
  line-height: 100px;
  margin-left: 60px;
  text-align: center;
  cursor: pointer;
}
#app #cart .row .qty {
  float: left;
  width: 20px;
  line-height: 100px;
  margin-left: 20px;
  text-align: center;
}
#app #cart .row .qty-plus {
  float: left;
  width: 20px;
  line-height: 100px;
  margin-left: 20px;
  text-align: center;
  cursor: pointer;
}
#app #cart .row .del {
  float: left;
  width: 80px;
  line-height: 100px;
  margin-left: 60px;
  cursor: pointer;
  text-decoration: underline;
  color: #ED277F;
}
#app #cart .row .totalprice {
  float: left;
  width: 80px;
  line-height: 100px;
  margin-left: 10px;
  text-align: right;
}
#app #cart .row .row p::before, #app #cart .row .box p::before, #app #cart .row .totalprice::before {
  content: "$";
}
#app #cart h5 {
  font-size: 1.2rem;
  text-align: right;
}
</style></head><body>
<div id="app">
  <div id="product">
    <item v-for="item in items" v-bind:item_data="item"></item>
  </div>
  <div id="cart">
    <div id="head">
      <h3>Shopping Cart</h3>
      <div id="price">Price</div>
      <div id="quantity">Quantity</div>
      <div id="total">Total</div>
    </div>
    <buyitem v-for="buyitem in buyitems" v-bind:buy_data="buyitem"></buyitem>
    <h5 v-if="total()">Sum: $ {{total()}}</h5>
  </div>
</div>


<template id="product-box">
  <div class="box">
    <img :src="item_data.img"/>
    <i class="fa fa-plus" v-on:click="addItem(item_data)"></i>
    <h2>{{item_data.title}}</h2>
    <p>$ {{item_data.price}}</p>
  </div>
</template>

<template id="buy-box">
  <div class="row">
    <img :src="buy_data.img"/>
    <h4>{{buy_data.title}}</h4>
    <p>$ {{buy_data.price}}</p>
    <div class="qty-minus" v-on:click="minusQty(buy_data)">-</div>
    <div class="qty">{{buy_data.qty}}</div>
    <div class="qty-plus" v-on:click="plusQty(buy_data)">+</div>
    <div class="del" v-on:click="removeItem(buy_data)">Remove</div>
    <div class="totalprice">{{buy_data.total}}</div>
  </div>
</template>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
<script >var beerClick = 0;
var ecoClick = 0;
var paperClick = 0;

Vue.component("item", {
  template: "#product-box",
  props: ["item_data", "buyitems"],
  methods: {
    addItem: function(item_data) {
      if (item_data.id == "beer") {
        beerClick += 1;
        if (beerClick <= 1) {
          this.pushData();
        } else {
          var i = this.findIndex(this.$parent.buyitems, "id", "beer");
          this.$parent.buyitems[i].qty += 1;
          this.$parent.buyitems[i].total = this.$parent.buyitems[i].qty*this.$parent.buyitems[i].price;
          console.log(i);
        }
      } else if (item_data.id == "eco-bag") {
        ecoClick += 1;
        if (ecoClick <= 1) {
          this.pushData();
        } else {
          var i = this.findIndex(this.$parent.buyitems, "id", "eco-bag");
          this.$parent.buyitems[i].qty += 1;
          this.$parent.buyitems[i].total =this.$parent.buyitems[i].qty*this.$parent.buyitems[i].price;
        }
      } else {
        paperClick += 1;
        if (paperClick <= 1) {
          this.pushData();
        } else {
          var i = this.findIndex(this.$parent.buyitems, "id", "paper-bag");
          this.$parent.buyitems[i].qty += 1;
          this.$parent.buyitems[i].total = this.$parent.buyitems[i].qty*this.$parent.buyitems[i].price;
        }
      }
      console.log(beerClick, ecoClick, paperClick);
    },
    pushData: function() {
      this.$parent.buyitems.push({
        img: this.item_data.img,
        title: this.item_data.title,
        price: this.item_data.price,
        qty: 1,
        total: this.item_data.price,
        id: this.item_data.id
      });
    },
    findIndex: function(array, attr, value) {
      for (var i = 0; i < array.length; i += 1) {if (window.CP.shouldStopExecution(1)){break;}
        if (array[i][attr] === value) {
          return i;
        }
      }
window.CP.exitedLoop(1);

      return -1;
    },
  }
});
Vue.component("buyitem", {
  template: "#buy-box",
  props: ["buy_data", "buyitems"],
  methods: {
    removeItem: function(buy_data) {
      var index = this.$parent.buyitems.indexOf(buy_data);
      this.$parent.buyitems.splice(index, 1);
      if (buy_data.id == "beer") {
        beerClick = 0;
      } else if (buy_data.id == "eco-bag") {
        ecoClick = 0;
      } else {
        paperClick = 0;
      }
    },
    plusQty: function(buy_data){
      buy_data.qty += 1;
      buy_data.total = buy_data.qty*buy_data.price;
    },
    minusQty: function(buy_data){
      buy_data.qty -= 1;
      if (buy_data.qty < 0){
        buy_data.qty = 0;
      }
      buy_data.total = buy_data.qty*buy_data.price;
    }

  }
});

var app = new Vue({
  el: "#app",
  data: {
    items: [
      {
        img: "http://chenyiya.com/codepen/product-1.jpg",
        title: "Beer Bottle",
        price: "25",
        id: "beer"
      },
      {
        img: "http://chenyiya.com/codepen/product-2.jpg",
        title: "Eco Bag",
        price: "73",
        id: "eco-bag"
      },
      {
        img: "http://chenyiya.com/codepen/product-3.jpg",
        title: "Paper Bag",
        price: "35",
        id: "paper-bag"
      }
    ],
    buyitems: []
  },
  methods: {
    total: function(){
      var sum = 0;
      this.buyitems.forEach(function(buyitem){
            sum += parseInt(buyitem.total);
      });
      return sum;
    }
  }
});

//# sourceURL=pen.js
</script>
</body></html>
@endsection
