"use strict";

/*
// Table of content
// - Track range input
// - Append Element
*/

(function($, window){
  /*
  // Range input
  */
  (function () {
    $('#ratings-tab-content .input-group input[type="range"]').on('input', function (e) {
      const value = e.target.value;
      const min = e.target.min;
      const max = e.target.max;

        $(this).next().text(value);

      e.target.style.backgroundSize = (value - min) * 100 / (max - min) + '% 100%';

      countAvg();
    });

    /*
    // Reset rating track
    */
    window.addEventListener('load', function () {
      const ratings = document.querySelectorAll('#ratings-tab-content .input-group input[type="range"]');
      
      ratings.forEach(function (rating) {
        const value = rating.value;
        const min = rating.min;
        const max = rating.max;

        rating.style.backgroundSize = (value - min) * 100 / (max - min) + '% 100%';
      });
    })

    /*
    // Average rating
    */
    function countAvg() {
      const ratings = document.querySelectorAll('#ratings-tab-content .input-group .input-group-text');
      const ratingLen = ratings.length;
      let sum = 0;
        
      ratings.forEach(rating => {
        sum += Number(rating.textContent);
      });
      
      const avg = (sum / ratingLen).toFixed(1);
      $('#ratings-tab-content .sa-symbol__text').text(avg);
    }
  })();
}(jQuery, window));