
//function to show menu
function showMenu() {

    if($('#mobileMenu').is(":visible") == true) {
        $('#mobileMenu').slideUp()
    }else{
        $('#mobileMenu').slideDown()
    }
}
//end of function

// function for quantity counter
function quantityCount(data) {

    let USDollar = new Intl.NumberFormat('en-US');

    let counter = Number($('#data_counter').html());
    let amount = $('#hidden_amount').val();

    if(data == 'add') {
        counter = counter + 1;
    }else if(data == 'minus' && counter > 1) {
        counter = counter - 1;
    }

    $('#data_counter').html(counter);
    $('#display_counter').html(counter);
    $('#total_price').html(USDollar.format(amount * counter));
}
// end of function

//function to change font stype
function changeFontStyle(type) {

    switch(type) {
        case 1:
            $('#card_text').css("fontWeight", "300");
        break;
        case 2:
            $('#card_text').css("fontWeight", "600");
        break;
        case 3:
            $('#card_text').css({"fontWeight": "500", "fontStyle" : "italic"});
        break;
    }

    
}
//end of function


function setProperties(type, value) {

    if(type == 'cardtype') {

        $('#card_Type').val(value);

        if(value == 'Thin') {

            $('#card_text').css({"fontWeight": "300", "fontStyle" : "normal"});
            $('#card_text_back').css({"fontWeight": "300", "fontStyle" : "normal"});

        }else if(value == 'Bold') {

            $('#card_text').css({"fontWeight": "700", "fontStyle" : "normal"});
            $('#card_text_back').css({"fontWeight": "700", "fontStyle" : "normal"});

        }else if(value == 'Italic') {

            $('#card_text').css({"fontWeight": "500", "fontStyle" : "italic"});
            $('#card_text_back').css({"fontWeight": "500", "fontStyle" : "italic"});

        }
        

    }else if(type == 'carddesign') {

        $('#card_design').val(value);
        let cardColor = $('#card_color').val();

        if(value == 'Sample1') {

           $('#card_back_template_2').hide()
           $('#card_back_template_1').show()

        }else if(value == 'Sample2') {

            // format back picture
            $('#card_back_template_2').css({"width": "250px","top": "140px;", "left": "65px"})

            // check card color
            if(cardColor == 'Gold') {
                $("#card_back_template_2").attr("src","http://localhost/signaturecards/public/img/template/gold__back_card_template_02.png?1=1");
            }


           $('#card_back_template_1').hide()
           $('#card_back_template_2').show()
           
        }
    

    }else if(type == 'cardposition') {

        $('#card_position').val(value);
        
        if(value == 'Front') {

            $('#card_text_back').hide()
            $('#card_text_front').show()

        }else if(value == 'Back') {

            $('#card_text_front').hide()
            $('#card_text_back').show()

        }
    }
}

// function to add to cart
function AddToCart() {

    let entryid = $('#entry_id').val()
    let amount = $('#hidden_amount').val()
    let card_id = $('#card_id').val();
    let quantity = $('#data_counter').html()
    let cardColor = $('#card_color').val()
    let customName = $('#card_txt_id').val()
    let cardType = $('#card_Type').val()
    let cardPosition = $('#card_position').val()
    let cardDesign = $('#card_design').val()
    let properties = {name: customName, color:cardColor, font:cardType, position:cardPosition, template: cardDesign};
    

    //alert(amount + '/' + card_id + '/' + quantity + '/' + customName + '/' + cardType + '/' + cardPosition + '/' + cardDesign);
    
    $.ajax({
        type: "POST",
        data: { cardid: card_id, quantity: quantity, amount: amount, properties: JSON.stringify(properties)},
        url: "http://localhost/signaturecards/cards/addCardSession",
        success: function (data) {

            $('#cardItem').html(data)
            //alert('Item added to cart successfully!')

            $('.success-item-cart').fadeIn()

            return;

        },
    });

}// end of function


//function to chanage image background
function changeImageBG(color) {

    let v_no = Math.floor(Math.random() * 10);

    let card_front_name = $('#card_front_name').val();

    let format_card_front_name = card_front_name.replace('.jpg', '');

    if(color == 'black_gold') {

        $('#card_color').val('black_gold');

        $('#card_text_front').css('color', '#ccb043');
        $('#card_text_back').css('color', '#ccb043');

        let file_name = `http://localhost/signaturecards/public/img/card_products/${format_card_front_name}_3.jpg?v=${v_no}`;

        $("#card_front").css({"background-image": "url(" + file_name + ")"});  


        $("#card_back_template_1").attr("src","http://localhost/signaturecards/public/img/template/gold_back_card_template_01.png?v="+v_no);
        $("#card_back_template_2").attr("src","http://localhost/signaturecards/public/img/template/gold_back_card_template_02.png?1=3");
    
        $('#card_back').css('background-image', 'url(http://localhost/signaturecards/public/img/template/back_template_black_gold.png)')
        //$('#card_image_bg').css('background-image', 'url(http://localhost/signaturecards/public/img/cardTemplate2.png)');

    }else if(color == 'black') {

        $('#card_color').val('Black');

        $('#card_text_front').css('color', '#c0c0c0');
        $('#card_text_back').css('color', '#c0c0c0');

        let file_name = `http://localhost/signaturecards/public/img/card_products/${format_card_front_name}_1.jpg?v=2`;

        $("#card_front").css({"background-image": "url(" + file_name + ")"});  

        $("#card_back_template_1").attr("src","http://localhost/signaturecards/public/img/template/black_card_template_01.png?1=1");

        $("#card_back_template_2").attr("src","http://localhost/signaturecards/public/img/template/black_card_template_02.png?1=1");

        $('#card_back').css('background-image', 'url(http://localhost/signaturecards/public/img/template/back_template_black.png)')
        //$('#card_image_bg').css('background-image', 'url(http://localhost/signaturecards/public/img/cardTemplate.png)');


    }else if(color == 'gold') {


        $('#card_color').val('Gold');

        $('#card_text_front').css('color', '#201e1e');
        $('#card_text_back').css('color', '#201e1e');

        let file_name = `http://localhost/signaturecards/public/img/card_products/${format_card_front_name}_2.jpg?v=2`;

        $("#card_front").css({"background-image": "url(" + file_name + ")"});  

        $("#card_back_template_1").attr("src","http://localhost/signaturecards/public/img/template/gold_white_back_card_template_01.png?v=3");

        $("#card_back_template_2").attr("src","http://localhost/signaturecards/public/img/template/gold__back_card_template_02.png?1=1");

        $('#card_back').css('background-image', 'url(http://localhost/signaturecards/public/img/template/back_template_gold.png)')
        //$('#card_image_bg').css('background-image', 'url(http://localhost/signaturecards/public/img/cardTemplate3.png)');

    }else if(color == 'white') {

        $('#card_color').val('White');

        $('#card_text_front').css('color', '#201e1f');
        $('#card_text_back').css('color', '#201e1f');

        let file_name = `http://localhost/signaturecards/public/img/card_products/${format_card_front_name}_4.jpg?v=2`;

        $("#card_front").css({"background-image": "url(" + file_name + ")"});  


        $("#card_back_template_1").attr("src","http://localhost/signaturecards/public/img/template/gold_white_back_card_template_01.png?1=1");
        $("#card_back_template_2").attr("src","http://localhost/signaturecards/public/img/template/gold__back_card_template_02.png?1=1");

        $('#card_back').css('background-image', 'url(http://localhost/signaturecards/public/img/template/back_template_white.png?c=1)')
        //$('#card_image_bg').css('background-image', 'url(http://localhost/signaturecards/public/img/cardTemplate4.png)');

    }
}
// end of function


  // Select all div elements with the class 'box'
  const cardColorScheme = document.querySelectorAll('.card-color-scheme');

  // Function to remove the 'selected' class from all divs
  function removeCardColorSchemeSelectedClass() {
    cardColorScheme.forEach(card => {
        card.classList.remove('card-color-scheme-selected');
      });
  }

  // Add a click event listener to each box
  cardColorScheme.forEach(card => {
    card.addEventListener('click', () => {
        removeCardColorSchemeSelectedClass(); // Remove 'selected' class from all divs
        card.classList.add('card-color-scheme-selected'); // Add 'selected' class to the clicked div
      });
  });

  // Select all div elements with the class 'box'
  const cardFontType = document.querySelectorAll('.card-font-type');

  // Function to remove the 'selected' class from all divs
  function removeCardFontTypeSelectedClass() {
    cardFontType.forEach(card => {
        card.classList.remove('card-fontType-selected');
      });
  }

  // Add a click event listener to each box
  cardFontType.forEach(card => {
    card.addEventListener('click', () => {
        removeCardFontTypeSelectedClass(); // Remove 'selected' class from all divs
        card.classList.add('card-fontType-selected'); // Add 'selected' class to the clicked div
      });
  });

  // Select all div elements with the class 'box'
  const cardDesignType = document.querySelectorAll('.card-design');

  // Function to remove the 'selected' class from all divs
  function removeCardDesignSelectedClass() {
    cardDesignType.forEach(card => {
        card.classList.remove('card-design-selected');
      });
  }

  // Add a click event listener to each box
  cardDesignType.forEach(card => {
    card.addEventListener('click', () => {
        removeCardDesignSelectedClass(); // Remove 'selected' class from all divs
        card.classList.add('card-design-selected'); // Add 'selected' class to the clicked div
      });
  });


  // Select all div elements with the class 'box'
  const cardPosition = document.querySelectorAll('.card-position');

  // Function to remove the 'selected' class from all divs
  function removeCardPositionSelectedClass() {
    cardPosition.forEach(card => {
        card.classList.remove('card-position-selected');
      });
  }

  // Add a click event listener to each box
  cardPosition.forEach(card => {
    card.addEventListener('click', () => {
        removeCardPositionSelectedClass(); // Remove 'selected' class from all divs
        card.classList.add('card-position-selected'); // Add 'selected' class to the clicked div
      });
  });


// onchange function for card Name
$("#card_txt_id").on('change keydown paste input', function(){
    let txt_data = $('#card_txt_id').val()
    $('#card_text_front').html(txt_data.toUpperCase())
    $('#card_text_back').html(txt_data.toUpperCase())
});
// end of function
