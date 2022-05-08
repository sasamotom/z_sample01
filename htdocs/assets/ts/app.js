/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/ts/class/Sample.ts":
/*!***************************************!*\
  !*** ./src/assets/ts/class/Sample.ts ***!
  \***************************************/
/***/ (function(__unused_webpack_module, exports) {


// サンプルクラス（TS）
Object.defineProperty(exports, "__esModule", ({ value: true }));
exports.Sample = void 0;
class Sample {
    //----------------------------------------------------
    // 機能： コンストラクタ
    // 引数： no     番号（必須）
    //       text   文字列
    // 戻値： なし
    //----------------------------------------------------
    constructor(no, text) {
        // データを保存
        this._no = no;
        this._text = text !== null && text !== void 0 ? text : 'テキスト引数が未設定';
    }
    //----------------------------------------------------
    // 機能： ログ表示
    // 引数： なし
    // 戻値： なし
    //----------------------------------------------------
    log() {
        console.log(this._no + '：' + this._text);
    }
}
exports.Sample = Sample;


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
var exports = __webpack_exports__;
/*!********************************!*\
  !*** ./src/assets/ts/index.ts ***!
  \********************************/

Object.defineProperty(exports, "__esModule", ({ value: true }));
const Sample_1 = __webpack_require__(/*! ./class/Sample */ "./src/assets/ts/class/Sample.ts");
window.addEventListener("DOMContentLoaded", () => {
    const sample = new Sample_1.Sample(1, 'てきすとひきすう');
    sample.log();
});

}();
/******/ })()
;
//# sourceMappingURL=app.js.map