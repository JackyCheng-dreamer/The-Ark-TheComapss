var questions_list = [];
//checking if visited the question set already
var visited = [];
// counting the passage number word 
var word_number = -1;
// for highlight_which word in the passage
var correct_word = []; // maybe need add [] for double word
// for storing the temp correct word 
var temp_word__target = [];

var keyword_in_question_list = [];

/*
character_word = Whole JSON file
json_obejct_character = JSON [0], [1] = JSON {　ｘ：[] }
character_word[json_obejct_character][first_char] = JSON [ 0 ] {key : []} = JSON { x : [] } 個array
*/
function SearchInList(target) {
    word_number++;
    //console.log("target at char 0 :" + target.charAt(0));
    for (json_obejct_character in character_word) {
        // get char[json_obejct_character].key ,check if key same
        var first_char = Object.keys(character_word[json_obejct_character])[0];
        console.log("target0 = " + target.charAt(0) + " which keywords? = " + first_char);
        if (target.charAt(0) == first_char) {


            for (now_word in character_word[json_obejct_character][first_char]) {

                now_word_is = character_word[json_obejct_character][first_char][now_word];
                if (target == now_word_is) {
                    return true;
                }
            }
            return false;
        }
    }
    return false;
}

/*
key_question_pair = Whole JSON file
index = JSON [0], [1] = JSON {　keyword：[]  , q1""",q2:"" ,q3:"" } , which JSON index has question to pop
key_question_pair[index][keyword] = JSON [ 0 ] {key : []} = JSON { x : [] } 個array
*/
function SearchKeyword(target) {
    //console.log('searchkeyword');
    if (!(visited.includes(target))) {
        if (SearchInList(target)) {
            console.log("Can search target : " + target);
            for (index in key_question_pair) { // the index is 0,1,2,3,4,5

                //console.log("what is index? " + key_question_pair[index] + " <--json object");
                let key_words = key_question_pair[index].keyword.split(";");

                console.log("keyword now : " + key_words + " and our target is " + target);
                //keyword is found in any keyword list
                for (var i = 0; i < key_words.length; i++) {
                    if (key_words[i].toLowerCase() == target) { // consider the case that have 2 words in 
                        visited.push(target);
                        // loop farn d questions
                        var n2 = 0;
                        for (yg in key_question_pair[index]) {
                            if (yg == "keyword") continue;

                            target_question = key_question_pair[index][yg];
                            // if dun have this q then add
                            if (!(questions_list.includes(target_question))) {
                                // check need5nedd change questions
                                if (target_question) {
                                    target_question = target_question.replace(/' '/g, "'" + target + "'");
                                }
                                questions_list.push(target_question);
                                n2++;
                            }

                        }
                        let x = [];
                        x[target] = n2;
                        console.log("x : " + x);
                        keyword_in_question_list.push(x);

                        // find number in passage
                        correct_word.push(target);
                        var stop = true;
                        break;
                        // 之後user 禁yes 再generate all questions, based on [ for n in visited : key_question_pair[n].Q1]
                    }
                }
                if (stop) break;
            }
        }
    }
}
// find all the keywords & highlight the textarea 
function Splitpassage() {
    // target = passage all seperate keywords 
    let target = $('#keyword_script').val();
    target = target.toLowerCase();
    target = target.replace(/[.,\/#!?$%\^&\*;:{}=\-_`~()]/g, "");
    passage = target.split(" ");
    console.log(passage);
    for (word in passage) {
        SearchKeyword(passage[word]);
    }

    // hightlight 
}
/*
function hightlightpassage() {
    for (x in correct_word) {
        $('textarea').highlightTextarea({
            words: correct_word
        });
    }
}*/

/*
function generateQuestions() {
    console.log('gen');
    for (xg in visited) {
        for (yg in key_question_pair[xg]) {
            console.log(yg);
            if (yg == "keyword") continue;
            target_question = key_question_pair[xg][yg];
            if (!(questions_list.includes(target_question))) {
                questions_list.push(target_question);
                console.log(questions_list);
            }
        }
    }
}*/
function generateHTML() {
    let k = 0;
    let n = 0;
    console.log(questions_list);
    for (a in keyword_in_question_list) { // 0, 1 ,2 {}

        for (b in keyword_in_question_list[a]) {
            let loop_num = keyword_in_question_list[a][b];
            console.log("loopnum : " + loop_num);
            $('#trial').append(" <div class='wrapper_a wrapper_f trial-" + n +
                "'> <div class='card pop_up' id='pop-" + n + "'> <div class='card-header pop-keyword' id='heading-" + n + "'>" +

                '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-' + n + '" aria-expanded="true" aria-controls="collapse-' + n + '"> ' +
                '<h6 class="responsive">' +
                b + "</button></h6></div>"); // pop up card 


            $('#pop-' + n).append("<div id='collapse-" + n + "' class='collapse' aria-labelledby='heading-" + n + "' data-parent='.trial-" + n + "'> ");
            if (loop_num == 0) {
                $('#collapse-' + n).append("<div class= 'card-body pop-questions' id='pop-questions-" + k + "'>");
                $('#pop-questions-' + k).append("<label for='show_answer-no'" + k + " class='col-xs-12 col-sm-12 col-form-label '> The follow-up questions are shown previously !</label>");
                k++;
            }
            for (q = 0; q < loop_num; q++) {
                $('#collapse-' + n).append("<div class= 'card-body pop-questions' id='pop-questions-" + k + "'>");
                $('#pop-questions-' + k).append("<label for='show_answer'" + k + " class='col-xs-12 col-sm-12 col-form-label '>" + questions_list[k] + "</label>");
                $('#collapse-' + n).append("<input type='text' id='show_answer-" + k + "' class='form-control show_answer'></label>");
                k++;
            }
            $('#trial').append(" </div> </div> </div></div> "); // pop up card 
        }
        n++;

    }


}

function nextPage() {
    generateStory();
    $('#keyword_scanning_page').submit();
}


$(document).ready(() => {
    $('#keyword_show').click(() => {

        $('.container_b').empty();

        $("#loading_pic").show();
        setTimeout(function() {
            // long code here
            $("#loading_pic").hide();
            $(".sample").hide();
            questions_list = [];
            //checking if visited the question set already
            visited = [];
            // counting the passage number word 
            word_number = -1;
            // for highlight_which word in the passage
            correct_word = []; // maybe need add [] for double word
            // for storing the temp correct word 
            temp_word__target = [];
            keyword_in_question_list = [];
            Splitpassage();
            generateHTML();
            console.log(visited);
            console.log(keyword_in_question_list);
            //hightlightpassage();

            // do other stuff 
            // create card 
            // highlight the passage   string.replace(/target/g,"<span>fox</span>");
        }, 1);

    })

    /*$(".pop-keyword").each(function() {
        $(this).on('click', function(event) {
            $(this).toggle();
            //(... rest of your JS code)
        });
    });*/


})