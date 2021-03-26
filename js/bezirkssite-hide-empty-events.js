/**
 * Hide events block on bezirkssites if no events exist
 */

(function () {
    const events_table = document.querySelector('.bg-events-container');
    if (events_table.childElementCount === 0) {
        events_table.closest('.wp-block-group').classList.add('bg-events-hidden');
    }

})();