jQuery(function ($) {
  $(".ms-product-card").each(function () {
    const desc = $(this).find(".ms-product-desc");
    const btn = $(this).find(".ms-product-toggle");

    // Step 1: Check natural height
    const fullHeight = desc[0].scrollHeight;

    // Approx height for 2 lines
    const twoLineHeight = parseFloat(desc.css("line-height")) * 2;

    // Step 2: If text is short → hide button
    if (fullHeight <= twoLineHeight + 2) {
      btn.hide(); // Hide arrow button
      desc.removeClass("collapsed"); // Show full text normally
    }

    // Step 3: Expand / collapse on click
    btn.on("click", function () {
      desc.toggleClass("expanded");
      btn.toggleClass("active");
    });
  });
});
