/**
  * All of the CSS for your admin-specific functionality should be
  * included in this file.
  */
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    width: 300px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0; /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}

.edit-popup-option .components-popover__content {
    padding: 10px 35px 10px 10px;
}

.edit-popup-option .components-popover__content button {
    position: absolute;
    right: 5px;
    top: 5px;
}

span.markup-red {
    background-color: red !important;
}

.components-popover__content .popup-over button {
    width: 100%;
    height: 35px;
    text-transform: uppercase;
    background-color: green;
    font-size: 20px;
    font-weight: 700;
    border: solid 1px black;
    color: white;
    border-radius: 5px;
}

div#Div1 {
    position: fixed;
    right: 300px;
    width: 250px;
    border: 1px solid #000;
    padding: 10px;
    z-index: 1;
    background: #fff;
    height: 65vh;
    overflow: scroll;
    top: 160px;
}

.shareCommentContainer {
    display: none;
    padding: 15px 18px;
}

.shareCommentContainer.loading .btn {
    pointer-events: none;
}

.focus .shareCommentContainer {
    display: block;
}

mdspan {
    background: #fdf0b6;
}

.readMoreSpan {
    display: none;
}

.readMoreSpan.active {
    display: block;
}

.cls-board-outer {
    position: relative;
    left: 0;
    background: #fff;
    width: 285px;
    box-shadow: 0px 6px 20px 0px rgba(27, 29, 35, 0.1);
    border-radius: 5px;
    margin-bottom: 15px;
    transition: all .5s;
    font-size: 13px;
    cursor: pointer;
    border: 1px solid #E2E4E7;
    right: 0;
}

.cls-board-outer .board .commentContainer {
    width: 100%;
    box-sizing: border-box;
    position: relative;
    padding: 15px 18px;
    border-top: 1px solid #e9eaed;
    color: #191e23;
}

.cls-board-outer .board .commentContainer:first-child {
    border-top: 0;
}

.shareCommentContainer {
    border-top: 1px solid #e9eaed;
}

.cls-board-outer .board .commentContainer.loading {
    background: #eee9e99e;
}

.cls-board-outer .board .commentContainer.draft {
    display: none;
    background: none;
}

.cls-board-outer .board .commentContainer.draft.reverted_back {
    display: block;
}

.cls-board-outer .board .commentContainer.added {
    background: #dffff4;
}

.cls-board-outer .board .commentContainer.edited {
    background: #ffffb5;
}

.cls-board-outer .board .commentContainer.deleted {
    background: #ffa787;
}

.cls-board-outer .board .commentContainer.permanent_draft {
    background: #cf333330;
    background: none;
}

.cls-board-outer .board .commentContainer.publish {
    background: #33cf6c30;
    background: none;
}

.reverted_back.resolved {
    background: #fa9f77;
}

.cls-board-outer .board .commentContainer .commentText {
    width: 100%;
    font-size: 13px;
    line-height: 1.2;
    font-weight: 500;
}

.cls-board-outer .board .shareCommentContainer textarea,
.cls-board-outer .board .commentContainer .commentText textarea {
    width: 100%;
    display: block;
    height: 35px;
    font-size: 13px;
    border: 1px solid #e2e4e7;
    resize: none;
    box-shadow: none;
}

.cls-board-outer .board .shareCommentContainer textarea:focus,
.cls-board-outer .board .shareCommentContainer textarea:active,
.cls-board-outer .board .commentContainer .commentText textarea:focus,
.cls-board-outer .board .commentContainer .commentText textarea:active{
    box-shadow: none;
    border-color: #007cba;
}

.cls-board-outer .board .shareCommentContainer .btn {
    color: #007cba;
    letter-spacing: 0.5px;
    border-radius: 4px;
    padding: 6px 10px;
    outline: none;
    cursor: pointer;
    margin-top: 10px;
    font-weight: 500;
    border: 1px solid #007cba;
    background: #f3f5f6;
    font-size: 12px;
}

.cls-board-outer .board .shareCommentContainer .btn.btn-cancel {
    margin-left: 10px;
}

.cls-board-outer .board .shareCommentContainer textarea:focus + button,
.cls-board-outer .board .shareCommentContainer.hovered button {
    display: inline-block;
}

.cls-board-outer .board .commentContainer button {
    color: #007cba;
    font-size: 12px;
    letter-spacing: 0.5px;
    border-radius: 4px;
    padding: 6px 10px;
    outline: none;
    cursor: pointer;
    margin-top: 10px;
    font-weight: 500;
    border: 1px solid #007cba;
    background: #f3f5f6;
    opacity: 1;
    margin-right: 10px;
}

.commented-on::after {
    content: '';
    background: rgb(2, 0, 36);
    background: linear-gradient(280deg, rgba(2, 0, 36, 1) 0%, rgba(190, 173, 173, 1) 5%, rgba(255, 255, 255, 1) 100%);
    position: relative;
    left: -50px;
    opacity: 0.5;
    width: 50px;
    display: inline-block;
    height: 18px;
    top: 3px;
}

.commented-on::before {
    content: '';
    background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgb(190, 173, 173) 0%, rgba(255, 255, 255, 0) 100%);
    position: relative;
    left: 47px;
    opacity: 0.5;
    width: 50px;
    display: inline-block;
    height: 18px;
    top: 3px;
}

.comment-header {
    display: flex;
    align-items: flex-start;
    width: 100%;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.user-data-row:last-child {
    padding-bottom: 0;
}

#custom-history-popup {
    display: none;
    opacity: 0;
    transition: all 1s;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}

#custom-history-popup.active {
    display: block;
    min-height: 300px;
    width: 80%;
    position: absolute;
    left: 20px;
    top: 61px;
    background: #fff;
    padding: 20px;
    z-index: 99;
    box-sizing: border-box;
    opacity: 1;
    max-height: calc(90vh - 100px);
    overflow-y: auto;
    box-shadow: rgba(60, 64, 67, 0.2) 0 7px 10px 2px;
    border-radius: 4px !important;
    border: 1px solid #e9eaed;
    border-top: 0;
}

#custom-history-popup table {
    width: 100%;
    text-align: center;
}

.user-avtar {
    margin-right: 15px;
    float: left;
    width: 50px;
}

.user-avtar img {
    max-height: 50px;
}

.user-time {
    float: right;
    width: 235px;
    text-align: right;
    color: #939393;
    font-size: 14px;
}

#custom-history-popup #history-popup-insder::before {
    content: 'Comment Activity';
    font-size: 20px;
    display: block;
    margin: 0 0 20px;
    font-weight: 700;
}

.user-title {
    float: left;
    width: 60%;
    width: calc(100% - 300px);
    font-size: 15px;
}

.user-data-box {
    overflow: hidden;
}

.user-data-row {
    border-top: 1px solid #e9eaed;
    padding: 15px 0;
}

span.user-name {
    font-weight: 700;
}

.user-comment {
    margin-top: 8px;
    font-size: 14px;
}

.mdspan-comment.focus {
    background: #ff9c00 !important;
}

#custom-history-popup table th,
#custom-history-popup table td {
    border: 1px solid #23282d6e;
}

#custom-history-popup table th {
    background: #23282d;
    color: white;
    padding: 10px;
    text-transform: uppercase;
    font-size: 12px;
}

#custom-history-popup table td {
    padding: 15px 0;
}

#comments-toggle.active,
#history-toggle.active {
    color: #3b923b;
}

.block-editor-editor-skeleton__body {
    position: relative;
}

.comment-header .buttons-holder .buttons-wrapper {
    display: none;
    position: absolute;
    background: #fff;
    box-shadow: rgba(60, 64, 67, 0.15) 0 2px 6px 2px;
    right: 0;
    border-radius: 4px;
    padding-top: 5px;
    z-index: 1;
}

.comment-header .buttons-holder.is_active .buttons-wrapper {
    display: block;
}

.buttons-opner {
    position: relative;
    cursor: pointer;
    color: #000;
    line-height: 1;
    display: flex;
}

.buttons-opner svg {
    transform: rotate(90deg);
    cursor: pointer;
}

.comment-header .avtar {
    width: 35px;
    margin-right: 10px;
    flex-shrink: 0;
    height: 35px;
}

.comment-header .avtar img {
    max-width: 100%;
    border-radius: 50%;
}

.comment-header .commenter-name-time {
    margin-right: 0;
    white-space: nowrap;
    overflow: hidden;
    flex-grow: 1;
    width: 60%;
    width: calc(100% - 130px);
}

.comment-header .commenter-name-time .commenter-name {
    font-size: 15px;
    line-height: 1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 4px;
    font-weight: 500;
    height: 17px;
}

.comment-header .commenter-name-time .comment-time {
    font-size: 10px;
    line-height: 1.1;
    font-weight: 400;
}

.buttons-holder {
    flex-shrink: 0;
    position: relative;
    background-color: white;
}

.btn-comment,
.buttons-holder {
    opacity: 0.3;
}

.cls-board-outer:hover .btn-comment,
.cls-board-outer:hover .buttons-holder {
    opacity: 1;
}

.cls-board-outer .commentContainer:not(:first-child) .buttons-opner button {
    display: none;
}

.comment-header .buttons-holder .buttons-wrapper button {
    width: 100%;
    cursor: pointer;
    display: block;
    background: #fff;
    margin-bottom: 5px;
    color: #000;
    text-align: left;
    border-radius: 0;
    padding: 5px 10px;
    font-weight: normal;
    border: 0;
    letter-spacing: 0.50px;
    outline: none;
}

mdspan[data-rich-text-format-boundary="true"] {
    background-color: #fcef45 !important;
}

.comment-header .buttons-holder .buttons-wrapper button:hover {
    background-color: #edf2f9;
}

#md-comments-suggestions-parent {
    position: absolute;
    top: 80px;
    right: 0;
    transition: all 0.5s;
    z-index: 99;
    height: 100%;
    height: calc(100% - 100px);
    overflow: auto;
    width: 345px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
}

#md-comments-suggestions-parent div#md-span-comments {
    height: 100%;
    overflow: auto;
    padding: 10px 10px 10px 42px;
    overflow-x: hidden;
}

div#md-suggestion-comments {
    height: 100%;
    overflow: auto;
    padding: 10px 10px 10px 42px;
    overflow-x: hidden;
}

div#md-suggestion-comments::-webkit-scrollbar-track, #md-comments-suggestions-parent div#md-span-comments::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.3);
    border-radius: 0;
    background-color: #fff;
    border: 1px solid #4747474d
}

div#md-suggestion-comments::-webkit-scrollbar, #md-comments-suggestions-parent div#md-span-comments::-webkit-scrollbar {
    width: 5px;
    background-color: #f1f1f1
}

div#md-suggestion-comments::-webkit-scrollbar-thumb, #md-comments-suggestions-parent div#md-span-comments::-webkit-scrollbar-thumb {
    border-radius: 0;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    background-color: #bdcad1
}

.character-map-popover .components-popover__content {
    max-height: 350px; /* avoid a bug with scrolling on initial load and repositioning */
}

#md-span-comments.comments-loader::before {
    content: 'Loading comments...';
    font-size: 10px;
}

div.charMap--container {
    margin: 2px;
    font-size: 18px;
}

.charMap--container ul.charMap--filter {
    float: right;
    margin-right: 5px;
    font-size: 14px;
}

.charMap--container ul.charMap--filter input {
    padding: 3px;
}

ul.charMap--category {
    background-color: white;
}

.charMap--category.active li {
    margin-bottom: 0;
}

.charMap--category-menu li {
    display: inline-block;
    margin-bottom: 0;
    border-bottom: none;
    font-size: 14px;
}

.charMap--category-menu .charMap--category-menu-item.active,
.charMap--category li a:hover {
    background: #0085ba;
}

.charMap--container .charMap--category-menu button:hover {
    background: inherit;
    cursor: pointer;
}

.charMap--category-menu .charMap--category-menu-item.active a {
    color: #fff;
}

.charMap--container .charMap--container .charMap--categories {
    margin: 5px;
}

.charMap--categories li a {
    color: #111;
}

body:not(.mobile) .character-map-popover .components-popover__content:not(.is-mobile) {
    min-width: 550px;
}

button.btn-comment.btn-accept:hover {
    box-shadow: none;
    background-color: rgba(0, 0, 0, 0.06);
    background-image: none;
    cursor: pointer;
    border-radius: 2px;
    border-width: 1px;
    border-color: transparent !important;
}

button.btn-comment.btn-accept {
    box-shadow: none;
    background-color: #fff;
    background-image: none;
    cursor: pointer;
    border-radius: 2px;
    border-width: 1px;
    border-color: transparent !important;
    min-width: 24px;
    vertical-align: middle;
    margin: 0 8px 0 0;
    line-height: 1;
}

button.btn-comment.btn-reject:hover {
    box-shadow: none;
    background-color: rgba(0, 0, 0, 0.06);
    background-image: none;
    cursor: pointer;
    border-radius: 2px;
    border-width: 1px;
    border-color: transparent !important;
}

button.btn-comment.btn-reject {
    box-shadow: none;
    background-color: #fff;
    background-image: none;
    cursor: pointer;
    border-radius: 2px;
    border-width: 1px;
    border-color: transparent !important;
    min-width: 24px;
    vertical-align: middle;
    margin: 0 8px 0 0;
    line-height: 1;
}

.cls-board-outer .board .commentContainer:last-child {
    margin-bottom: 0;
}

.comment-header button {
    margin-top: 0 !important;
}

/*
.cls-board-outer.focus {
    left: -30px;
}*/


.cls-board-outer.focus {
    position: absolute;
    top: 100px;
    z-index: 9;
    opacity: 1;
    right: 45px;
    left: initial;
    transition: all 0.5s;
}

.custom-buttons button {
    box-shadow: none !important;
}

.shareCommentContainer.loading {
    position: relative;
}

body.hide-comments mdspan {
    background: transparent !important;
}

body.hide-comments #md-span-comments {
    display: none !important;
}

.shareCommentContainer.loading::after {
    content: "";
    -webkit-animation-duration: 0.75s;
    -moz-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: rotate-forever;
    -moz-animation-name: rotate-forever;
    animation-name: rotate-forever;
    -webkit-animation-timing-function: linear;
    -moz-animation-timing-function: linear;
    animation-timing-function: linear;
    height: 15px;
    width: 15px;
    border: 3px solid #007cba;
    border-right-color: transparent;
    border-radius: 50%;
    position: absolute;
    right: 20px;
    bottom: 20px;
}

.cls-board-outer .board .shareCommentContainer.loading .btn-success {
    /* padding-right: 30px; */
}

@-webkit-keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg)
    }

}

@-moz-keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg)
    }

}

@keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg)
    }

}

.block-editor-writing-flow {
    float: left;
    padding-left: 0;
    width: 80%;
    width: calc(100% - 300px);
}

.block-editor-writing-flow::after {
    content: '';
    clear: both;
    display: block;
}

.hide-me {
    height: 0px;
    padding: 0 !important;
    margin: 0 !important;
    display: block;
}

.comment-header .comment-actions {
    width: 100%;
    display: flex;
    margin-bottom: 15px;
}

.comment-header .comment-details {
    width: 100%;
    display: flex;
    align-items: center;
    padding-right: 50px;
}

.comment-header .comment-actions .comment-resolve {
    width: 80%;
    width: calc(100% - 50px);
    display: flex;
    align-items: center;
}

.comment-header .comment-actions .buttons-wrapper {
    width: 50px;
    text-align: right;
}

.comment-header .comment-actions .buttons-wrapper i {
    color: #0a7fbb;
    margin-left: 6px;
    color: #9e9e9e;
}

.comment-header .comment-actions .comment-resolve label {
    font-size: 12px;
    color: #939393;
    font-weight: 400;
}

.comment-header .comment-actions .comment-resolve input {
    margin: 0 5px 0 0;
    opacity: 1;
    border-color: #b3bcc0;
    box-shadow: none;
    border-radius: 2px;
}

.cls-board-outer:hover .comment-header .comment-actions .buttons-wrapper i {
    color: #0a7fbb;
}

.cls-board-outer .board {
    position: relative;
}

.cls-board-outer .board:after {
    border-color: rgba(136, 183, 213, 0) !important;
    border-right-color: #ffffff !important;
    border-width: 8px !important;
    margin-top: -30px !important;
}

.cls-board-outer .board:before {
    border-color: rgba(194, 225, 245, 0) !important;
    border-right-color: #e2e4e7 !important;
    border-width: 10px !important;
    margin-top: -32px !important;
}

.cls-board-outer .board:before,
.cls-board-outer .board:after {
    content: "";
    right: 100%;
    top: 60px;
    border: solid #e2e4e7;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.cls-board-outer .board .commentContainer button.save-btn {
    background: #007cba;
    color: #fff;
}

.mdspan-comment {
    background: #feeead;
}

.comment-header .comment-actions .buttons-wrapper i:first-child {
    margin: 0;
}

.cls-board-outer .board .commentContainer:not(:nth-child(1)) .comment-actions {
    position: absolute;
    top: 20px;
    right: 20px;
    width: auto;
    margin: 0;
}

.cls-board-outer .board .shareCommentContainer .btn.btn-success {
    background-color: #007cba;
    color: #fff;
}

.cls-board-outer .board .commentContainer .commentText textarea {
    height: auto;
}

.cls-board-outer .board.fresh-board .commentContainer {
    border: 0;
    padding-bottom: 5px;
}

.cls-board-outer .board.fresh-board .shareCommentContainer {
    padding-top: 0;
    display: block;
}

.comments-loader .cls-board-outer .board:before, .comments-loader .cls-board-outer .board:after {
    display: none;
}

.custom-buttons {
    position: relative;
}

.custom-buttons.active:before,
.custom-buttons.active:after {
    content: "";
    right: 5px;
    top: 53px;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    z-index: 99999999999999;
}

.custom-buttons.active:after {
    border-color: rgba(136, 183, 213, 0) !important;
    border-bottom-color: #ffffff !important;
    border-width: 12px !important;
    margin-top: -28px !important;
}

.custom-buttons.active:before {
    border-color: rgba(194, 225, 245, 0) !important;
    border-bottom-color: #e9eaed !important;
    border-width: 14px !important;
    margin-top: -32px !important;
    margin-right: -2px;
}

.close-button-suggestion {
    position: absolute;
    right: 0;
    top: 0;
    height: auto !important;
}

.close-button-suggestion button {
    background-color: red;
}

.sb-popover-opacity {
    text-align: right;
}

.sb-popover-opacity button {
    display: inline;
}

.cls-board-outer.is_active_suggestion {
    display: block;
}

.divsuggestion-text {
    width: 100%;
    line-height: 1.2;
}

.buttons-opner-suggestion svg {
    fill: rgb(26, 115, 232);
}

.commentContainer .suggest-box-action button {
    background: none !important;
}

.commentContainer .suggest-box-action button svg {
    fill: rgb(125, 174, 239);
}

.commentContainer:hover .suggest-box-action button svg {
    fill: rgb(26, 115, 232);
}

.comment-header .suggest-box-action {
    width: 70px;
}

.comment-header .suggest-box-action button {
    margin: 0 !important;
}

.comment-header .suggest-box-action button:hover {
    background-color: rgba(80, 80, 80, 0.06) !important;
}

.suggestion-toggle {
    padding: 20px 10px;
}

.suggestion-toggle .components-base-control__field {
    margin: 0;
}

#md-tabs {
    margin-bottom: 15px;
    display: flex;
    min-width: 280px;
    justify-content: flex-end;
    position: fixed;
    right: 40px;
    z-index: 1;
    top: 89px;
    background: #fff;
    padding: 10px 0;
}

#md-tabs span {
    text-align: center;
    padding: 5px 20px;
    cursor: pointer;
    background: #f3f5f6;
    position: relative;
    color: #007cba;
    border: 1px solid #007cba;
    font-weight: 500;
    font-size: 13px;
    border-radius: 2px;
    margin-left: 8px;
}

#md-tabs span.active {
    background: #007cba;
    color: #fff;
}

#md-tabs span.active::after {
}

/* Hide format type when suggestion mode enable */
.suggestion-mode .block-editor-format-toolbar button[aria-label="Link"], .suggestion-mode .block-editor-format-toolbar button[aria-label="Unlink"] {
    display: none;
}

.suggestion-mode .components-dropdown-menu__menu[aria-label="More rich text controls"] .components-button:nth-child(1), .suggestion-mode .components-dropdown-menu__menu[aria-label="More rich text controls"] .components-button:nth-child(3), .suggestion-mode .components-dropdown-menu__menu[aria-label="More rich text controls"] .components-button:nth-child(5) {
    display: none;
}

.suggestion-mode .components-popover .block-editor-link-control {
    display: none;
}

.suggestion-mode .block-editor-block-contextual-toolbar[data-type="core/list"] .block-editor-block-toolbar__slot > .components-toolbar {
    display: none;
}


.cls-board-outer.Delete .board:before {
    border-right-color: #dc3232 !important;
}

.cls-board-outer.Delete {
    border-color: #dc3232 !important;
}

#md-suggestion-comments .cls-board-outer .board .commentContainer .comment-actions {
    position: absolute;
    top: 20px;
    right: 20px;
    width: auto;
    margin: 0;
}

#md-suggestion-comments .btn-comment {
    opacity: 1;
}

.comment-header .comment-actions .suggest-box-action.buttons-wrapper i {
    font-size: 24px;
}
ins[data-rich-text-format-boundary="true"] {
    background-color: rgba(0, 128, 0, 0.2);
}
del[data-rich-text-format-boundary="true"] {
    background-color: rgba(255, 0, 0, 0.2);
}
.is-sidebar-opened #md-tabs {
    right: 320px;
}
.components-notice-list {
    z-index: 999;
}
.components-notice-list:not(:empty) ~ div #md-comments-suggestions-parent {
    z-index: 999;
}
.components-notice-list:not(:empty) ~ div #md-tabs {
    top: 160px;
    background: transparent;
}

.suggestion-mode .components-dropdown-menu__menu[role="menu"] .components-menu-group:nth-child(2) {display:none;}

#md-comments-suggestions-parent .no-comment, #md-comments-suggestions-parent .no-suggestion {
    left: 0;
    background: #fff;
    box-shadow: rgba(60, 64, 67, 0.2) 0 0 10px 2px;
    margin-bottom: 15px;
    transition: all 0.5s;
    border: 1px solid #e9eaed;
    right: 0;
    width: 100%;
    box-sizing: border-box;
    position: relative;
    padding: 20px 10px;
    text-align: center;
    border-radius: 0;
    color: #007cba;
    font-size: 18px;
    font-style: italic;
    cursor: inherit;
}

.board.fresh-board .shareCommentContainer {
    border: none;
}

.custom-buttons svg {
    width: 19px;
}

.custom-buttons svg * {
    fill: #1e1e1e;
}

.custom-buttons button:hover svg * {
    fill: #007cba;
}

#md-comments-suggestions-parent .no-comment-found {
    left: 0;
    background: #fff;
    box-shadow: rgba(60, 64, 67, 0.2) 0 0 10px 2px;
    margin-bottom: 15px;
    transition: all 0.5s;
    border: 1px solid #e9eaed;
    right: 0;
    width: 100%;
    box-sizing: border-box;
    position: relative;
    padding: 20px 10px;
    text-align: center;
    border-radius: 0;
    color: #007cba;
    font-size: 18px;
    font-style: italic;
    cursor: inherit;
}
