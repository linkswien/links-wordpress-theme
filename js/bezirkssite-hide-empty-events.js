/**
 * Hide events block on bezirkssites if no events exist
 */

(function () {
    const events_container = document.querySelector('.bg-events-container');
    if (events_container != null && events_container.childElementCount === 0) {
        events_container.closest('.wp-block-group').classList.add('bg-events-hidden');
    }

})();