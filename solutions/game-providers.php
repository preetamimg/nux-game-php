<?php include '../layouts/header-link.php' ?>
<?php include '../layouts/header.php' ?>

<main>
<section class="topHeader paddingTopSection">
<div class="container">
<div class="breadCrumbsWrapper">
<ul class="breadCrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
<a class="active" href="index.html" itemprop="item">
<span itemprop="name">Home</span></a>
<meta itemprop="position" content="1" />
</li>
<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
<span class="bread" itemprop="name">Online Casino Software Providers</span>
<meta itemprop="position" content="2" />
</li>
</ul>
</div>
</div>
</section>
<div class="providersMainPage">
<div class="container">
<div class="providersWrapper">
<div class="providersTopSection">
<h1 class="title darkPurple">
Online Casino Software Providers
</h1>
<div class="innerItem">
<p class="txt black">
Use gambling content from the most popular and trustworthy casino game providers for your website and business.
</p>
</div>
</div>

<div class="filteringOverlay" onclick="togglePopup()"></div>
<div class="mobileFilteringButton" onclick="togglePopup()">
<div class="mobileFilteringButtonText">Filters</div>
</div>
<div id="filteringPopup" class="gamesProvidersWrapper filteringPopup" style="display: none">
<div class="filteringPopupHeader">
<div onclick="togglePopup()">
<svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 11L1 6.5L6 2" stroke="#440090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
</svg>
</div>
<h5 onclick="togglePopup()">Filters</h5>
</div>
<div class="filteringPopupCloseBtn" onclick="togglePopup()">
<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="12.0208" width="2" height="17" rx="1" transform="rotate(45 12.0208 0)" fill="black" />
<rect width="2" height="17" rx="1" transform="matrix(-0.707107 0.707107 0.707107 0.707107 1.43481 0)" fill="black" />
</svg>
</div>
<div class="gamesFilteringContainer gamesFilteringContainerMobile">
<div class="customDropdown customDropdownMobile" id="customDropdownMobile">
<div class="regionSelect" id="selectedOptionMobile">Region</div>
<div class="arrow" id="arrowMobile"></div>
<ul class="dropdownList" id="dropdownListMobile">
<label for="view_all_regions_m" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="view_all_regions_m">
<input type="checkbox" id="view_all_regions_m" name="view_all_regions_m" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
View all
</li>
</label>
<label for="filters_region_asiam" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_asiam">
<input type="checkbox" id="filters_region_asiam" name="filters_region_asiam" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
Asia
</li>
</label>
<label for="filters_region_central_americam" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_central_americam">
<input type="checkbox" id="filters_region_central_americam" name="filters_region_central_americam" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
Central America
</li>
</label>
<label for="filters_region_europem" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_europem">
<input type="checkbox" id="filters_region_europem" name="filters_region_europem" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
Europe
</li>
</label>
<label for="filters_region_middle_eastm" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_middle_eastm">
<input type="checkbox" id="filters_region_middle_eastm" name="filters_region_middle_eastm" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
Middle East
</li>
</label>
<label for="filters_region_north_americam" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_north_americam">
<input type="checkbox" id="filters_region_north_americam" name="filters_region_north_americam" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
North America
</li>
</label>
<label for="filters_region_south_americam" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_south_americam">
<input type="checkbox" id="filters_region_south_americam" name="filters_region_south_americam" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
South America
</li>
</label>
<label for="filters_region_worldwidem" class="gameFilteringLabel gameFilteringLabelMobile">
<li data-value="filters_region_worldwidem">
<input type="checkbox" id="filters_region_worldwidem" name="filters_region_worldwidem" value="checkboxValue" class="gameFilteringInputListMobile" style="display: none">
Worldwide
</li>
</label>
</ul>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_cryptom" name="filters_cryptom" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_cryptom" class="gameFilteringLabel customGameFilteringLabel">
Crypto friendly
</label>
</div>
<div class="gameFilteringCategories">
<h4 class="gameFilteringTitle">Categories</h4>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="1m" name="1m" value="checkboxValue" class="gameFilteringInputMobile">
<label for="1m" class="gameFilteringLabel gameFilteringLabelMobile">
View all
</label>
<div class="gameFilteringTotalProviders gameFilteringTotalProvidersMobile">118</div>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_card_gamesm" name="filters_card_gamesm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_card_gamesm" class="gameFilteringLabel gameFilteringLabelMobile">
Card games
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_casualm" name="filters_casualm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_casualm" class="gameFilteringLabel gameFilteringLabelMobile">
Casual games
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_dealersm" name="filters_dealersm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_dealersm" class="gameFilteringLabel gameFilteringLabelMobile">
Live dealers
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_lotteriesm" name="filters_lotteriesm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_lotteriesm" class="gameFilteringLabel gameFilteringLabelMobile">
Lotteries
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_roulettem" name="filters_roulettem" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_roulettem" class="gameFilteringLabel gameFilteringLabelMobile">
Roulette
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_slotsm" name="filters_slotsm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_slotsm" class="gameFilteringLabel gameFilteringLabelMobile">
Slots
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_sportsm" name="filters_sportsm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_sportsm" class="gameFilteringLabel gameFilteringLabelMobile">
Virtual sports
</label>
</div>
<div class="gameFilteringCheckbox gameFilteringCheckboxMobile">
<input type="checkbox" id="filters_table_gamesm" name="filters_table_gamesm" value="checkboxValue" class="gameFilteringInputMobile">
<label for="filters_table_gamesm" class="gameFilteringLabel gameFilteringLabelMobile">
Table games
</label>
</div>
</div>

<div class="gameFilteringSortMobile" id="gameFilteringSortMobile">
<div class="gameFilteringSortLettersMobile">
<div class="gameFilteringSortLetter">A</div>
<div class="gameFilteringSortLetter">Z</div>
</div>
<div class="gameFilteringSortImgMobile">
<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" id="svgSort">
<path d="M18.8197 0H2.18031C1.75789 0.000335382 1.34466 0.124282 0.990752 0.356798C0.636846 0.589314 0.357486 0.920402 0.186578 1.30988C0.0156695 1.69935 -0.0394398 2.13047 0.0279385 2.55092C0.0953167 2.97136 0.282286 3.36304 0.566154 3.67843L7.77733 11.6745V19.2157C7.7774 19.3631 7.81866 19.5075 7.8964 19.6323C7.97414 19.7572 8.0852 19.8574 8.21685 19.9216C8.32206 19.9739 8.43793 20.0007 8.55524 20C8.73204 19.9998 8.90352 19.939 9.04143 19.8274L10.5 18.651L12.931 16.6902C13.0219 16.6168 13.0954 16.5237 13.1459 16.4178C13.1963 16.3119 13.2226 16.1959 13.2227 16.0784V11.6745L20.4338 3.67843C20.7177 3.36304 20.9047 2.97136 20.9721 2.55092C21.0394 2.13047 20.9843 1.69935 20.8134 1.30988C20.6425 0.920402 20.3632 0.589314 20.0092 0.356798C19.6553 0.124282 19.2421 0.000335382 18.8197 0Z" fill="#440090" fill-opacity="0.8" />
</svg>
</div>
<div class="gameFilteringSortText">Sort by name</div>
</div>

<div class="mobileFilteringShowButton" onclick="togglePopup()">
<div class="mobileFilteringShowButtonText">Show</div>
</div>
<div class="mobileFilteringResetButton" onclick="resetCheckboxes()">
<div class="mobileFilteringResetButtonText">Reset filter</div>
</div>
<script>
let popup = document.getElementById('filteringPopup');
let selectedOptionMobile = document.getElementById("selectedOptionMobile");
let dropdownListMobile = document.getElementById("dropdownListMobile");
let arrowMobile = document.getElementById("arrowMobile");
let selectedValueMobile;
let isVisible = dropdownListMobile.style.display;
let customDropdownMobile = document.getElementById("customDropdownMobile");
window.onscroll = function() { let scrollPosition = window.scrollY || document.documentElement.scrollTop;
scrollPosition = window.scrollY || document.documentElement.scrollTop;
popup.style.top = 'calc(100px + ' + scrollPosition + 'px)';
};
function togglePopup() {
let overlay = document.querySelector('.filteringOverlay');
let body = document.body;
if (popup.style.display === 'none') {
overlay.style.display = 'block';
popup.style.display = 'block';
body.style.overflow = 'hidden';
} else {
overlay.style.display = 'none';
popup.style.display = 'none';
body.style.overflow = 'auto';
}
}
arrowMobile.classList.remove("active");
selectedOptionMobile.addEventListener("click", function () {
isVisible = dropdownListMobile.style.display;
if (isVisible === "none" || isVisible === "") {
dropdownListMobile.style.display = "block";
customDropdownMobile.style.marginBottom = "440px";
} else {
dropdownListMobile.style.display = "none";
customDropdownMobile.style.marginBottom = "0";
}
arrowMobile.classList.toggle("active");
});
// Handle option selection
dropdownListMobile.addEventListener("click", function (event) {
if (event.target.tagName === "LI") {
selectedOptionMobile.textContent = event.target.textContent;
selectedValueMobile = event.target.getAttribute("data-value").slice(0, -1); // Store the selected value
let checkboxes = document.querySelectorAll('.gameFilteringInputMobile');
let checkedCheckboxesRegions = [];
let providerItems = document.querySelectorAll('.providersItem');
let hidenProviderItems = document.querySelectorAll('.hiddenProviders');
checkboxes.forEach(function(checkbox) {
if (checkbox.checked) {
checkedCheckboxesRegions.push(checkbox.id.slice(0,-1));
}
});
providerItems.forEach(function(item) {
let filterIdElements = item.querySelectorAll('.filterId');
let showItem = false;
let itemOptionsRegions = [];
filterIdElements.forEach(function(filterIdElement) {
let itemOption = filterIdElement.textContent.trim();
itemOptionsRegions.push(itemOption);
if (selectedValueMobile === itemOption && checkedCheckboxesRegions.some(option => itemOptionsRegions.includes(option))) {
showItem = true;
}
if (selectedValueMobile === itemOption && checkedCheckboxesRegions.length === 0) {
showItem = true;
}
if (selectedValueMobile === 'view_all_regions_' && checkedCheckboxesRegions.some(option => itemOptionsRegions.includes(option))) {
showItem = true;
}
})
if (showItem) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
let allListCheckboxes = document.querySelectorAll('.gameFilteringInputListMobile');
if (selectedValueMobile === 'view_all_regions_' && checkedCheckboxesRegions.length === 0) {
providerItems.forEach(function(item) {
item.style.display = 'block';
});
Array.from(allListCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = false;
});
hidenProviderItems.forEach(function(item) {
item.style.display = 'none';
})
}
let showAllButton = document.querySelector('.showAllButton');
showAllButton.style.display = 'flex';
if (selectedValueMobile.length > 0) {
showAllButton.style.display = 'none';
} if (selectedValueMobile === 'view_all_regions_') {
showAllButton.style.display = 'flex';
}
let prevSelectedLi = dropdownListMobile.querySelector(".selected");
if (prevSelectedLi) {
prevSelectedLi.classList.remove("selected");
prevSelectedLi.style.backgroundColor = "";
prevSelectedLi.style.color = "#440090";
}
event.target.classList.add("selected");
event.target.style.backgroundColor = "#440090";
event.target.style.color = "#fff";
dropdownListMobile.style.display = "none";
customDropdownMobile.style.marginBottom = "0";
arrowMobile.classList.remove("active");
}
});
// Close the dropdown if the user clicks outside
document.addEventListener("click", function (event) {
if (!selectedOptionMobile.contains(event.target) && !dropdownListMobile.contains(event.target)) {
dropdownListMobile.style.display = "none";
customDropdownMobile.style.marginBottom = "0";
arrowMobile.classList.remove("active");
}
});
function updateViewAllListsCheckboxMobile(checkbox) {
let checkboxes = Array.from(document.querySelectorAll('.gameFilteringInputListMobile'));
let anyCheckboxChecked = checkboxes.some(checkbox => checkbox.checked);
checkboxes.forEach(cb => {
if (cb !== checkbox) {
cb.checked = false;
}
});
};
Array.from(document.querySelectorAll('.gameFilteringInputListMobile')).forEach(checkbox => {
checkbox.addEventListener('change', () => updateViewAllListsCheckboxMobile(checkbox));
});
// Sort by order
let sortOrder = 'asc';
let lettersElementMobile = document.querySelector('.gameFilteringSortLettersMobile');
let gameFilteringSortImgMobile = document.querySelector('.gameFilteringSortImgMobile');
let isReversedMobile = false;
let svgElementMobile = document.getElementById('svgSort');
document.getElementById('gameFilteringSortMobile').addEventListener('click', function () {
sortImages();
isReversedMobile = !isReversedMobile;
lettersElementMobile.style.transition = 'flex-direction 0.3s ease';
gameFilteringSortImgMobile.style.transition = 'transform 0.3s ease';
if (isReversedMobile) {
lettersElementMobile.style.flexDirection = 'column-reverse';
gameFilteringSortImgMobile.style.transform = 'rotate(180deg)';
svgElementMobile.style.margin = '0 0 0 -3px';
} else {
lettersElementMobile.style.flexDirection = 'column'; gameFilteringSortImgMobile.style.transform = ''; svgElementMobile.style.margin = '-1px 0 0 3px';
}
});
function resetCheckboxes() {
const allCheckboxes = document.querySelectorAll('.gameFilteringInputMobile');
allCheckboxes.forEach(function(checkbox) {
if (checkbox.checked) {
checkbox.checked = false;
}
});
// Reset region dropdown
const selectedOptionMobile = document.getElementById('selectedOptionMobile');
selectedOptionMobile.textContent = 'Region';
function sortImagesDefault() {
isReversedMobile = false;
sortOrder = 'asc';
lettersElementMobile.style.flexDirection = 'column'; gameFilteringSortImgMobile.style.transform = ''; svgElementMobile.style.margin = '-1px 0 0 3px';
let container = document.querySelectorAll('.providersItem');
let images = Array.from(container);
images.sort(function (a, b) {
let titleA = a.querySelector('img').getAttribute('title').toLowerCase();
let titleB = b.querySelector('img').getAttribute('title').toLowerCase();
return titleA.localeCompare(titleB);
});
let parent = container[0].parentNode;
parent.innerHTML = '';
images.forEach(function (item) {
parent.appendChild(item);
});
}
sortImagesDefault();
getCheckedCheckboxesMobile();
}
function updateViewAllCheckboxMobile() {
let anyCheckboxChecked = Array.from(document.querySelectorAll('.gameFilteringInputMobile')).slice(2).some(checkbox => checkbox.checked);
if (anyCheckboxChecked) {
document.getElementById('1m').checked = false;
} }
Array.from(document.querySelectorAll('.gameFilteringInputMobile')).slice(2).forEach(checkbox => {
checkbox.addEventListener('change', updateViewAllCheckboxMobile);
});
// show array with all ids
document.getElementById('1m').addEventListener('change', function () {
let allCheckboxes = document.querySelectorAll('.gameFilteringInputMobile');
if (document.getElementById('1m').checked) {
Array.from(allCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = true;
});
} else {
Array.from(allCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = false;
});
}
})
document.querySelectorAll('.gameFilteringInputMobile').forEach(function(checkbox) {
checkbox.addEventListener('change', getCheckedCheckboxesMobile);
});
function getCheckedCheckboxesMobile() {
let checkboxes = document.querySelectorAll('.gameFilteringInputMobile');
let checkedCheckboxes = [];
checkboxes.forEach(function(checkbox) {
if (checkbox.checked) {
checkedCheckboxes.push(checkbox.id.slice(0,-1));
}
});
let providerItems = document.querySelectorAll('.providersItem');
let hidenProviderItems = document.querySelectorAll('.hiddenProviders');
let checkedRegion = selectedValueMobile && selectedValueMobile !== 'view_all_regions_';
providerItems.forEach(function(item) {
let filterIdElements = item.querySelectorAll('.filterId');
let showItem = false;
let optionsArray = [];
filterIdElements.forEach(function(filterIdElement) {
let itemId = filterIdElement.textContent.trim();
optionsArray.push(itemId);
})
if (checkedRegion && checkedCheckboxes.some(option => optionsArray.includes(option))) {
showItem = true;
}
if (checkedCheckboxes.some(option => optionsArray.includes(option))) {
showItem = true;
}
if (checkedRegion && !optionsArray.includes(selectedValueMobile)) {
showItem = false;
}
if (checkedRegion && checkedCheckboxes.length < 1 && optionsArray.includes(selectedValueMobile)) {
showItem = true;
}
if (showItem) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
if (!checkedRegion && checkedCheckboxes.length < 1) {
providerItems.forEach(function(item) {
item.style.display = 'block';
});
hidenProviderItems.forEach(function(item) {
item.style.display = 'none';
})
}
let showAllButton = document.querySelector('.showAllButton');
showAllButton.style.display = 'flex';
if (checkboxes.length > 0) {
const isAnyCheckboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
if (isAnyCheckboxChecked) {
showAllButton.style.display = 'none';
}
}
if (checkedRegion) {
showAllButton.style.display = 'none';
}
}
</script>
</div>
</div>

<div class="gamesProvidersWrapper" style="position: relative">
<div class="gamesFilteringContainer">
<div class="customDropdown" id="customDropdown">
<div class="regionSelect" id="selectedOption">Region</div>
<div class="arrow" id="arrow"></div>
<ul class="dropdownList" id="dropdownList">
<label for="view_all_regions" class="gameFilteringLabel">
<li data-value="view_all_regions">
<input type="checkbox" id="view_all_regions" name="view_all_regions" value="checkboxValue" class="gameFilteringInputList" style="display: none">
View all
</li>
</label>
<label for="filters_region_asia" class="gameFilteringLabel">
<li data-value="filters_region_asia">
<input type="checkbox" id="filters_region_asia" name="filters_region_asia" value="checkboxValue" class="gameFilteringInputList" style="display: none">
Asia
</li>
</label>
<label for="filters_region_central_america" class="gameFilteringLabel">
<li data-value="filters_region_central_america">
<input type="checkbox" id="filters_region_central_america" name="filters_region_central_america" value="checkboxValue" class="gameFilteringInputList" style="display: none">
Central America
</li>
</label>
<label for="filters_region_europe" class="gameFilteringLabel">
<li data-value="filters_region_europe">
<input type="checkbox" id="filters_region_europe" name="filters_region_europe" value="checkboxValue" class="gameFilteringInputList" style="display: none">
Europe
</li>
</label>
<label for="filters_region_middle_east" class="gameFilteringLabel">
<li data-value="filters_region_middle_east">
<input type="checkbox" id="filters_region_middle_east" name="filters_region_middle_east" value="checkboxValue" class="gameFilteringInputList" style="display: none">
Middle East
</li>
</label>
<label for="filters_region_north_america" class="gameFilteringLabel">
<li data-value="filters_region_north_america">
<input type="checkbox" id="filters_region_north_america" name="filters_region_north_america" value="checkboxValue" class="gameFilteringInputList" style="display: none">
North America
</li>
</label>
<label for="filters_region_south_america" class="gameFilteringLabel">
<li data-value="filters_region_south_america">
<input type="checkbox" id="filters_region_south_america" name="filters_region_south_america" value="checkboxValue" class="gameFilteringInputList" style="display: none">
South America
</li>
</label>
<label for="filters_region_worldwide" class="gameFilteringLabel">
<li data-value="filters_region_worldwide">
<input type="checkbox" id="filters_region_worldwide" name="filters_region_worldwide" value="checkboxValue" class="gameFilteringInputList" style="display: none">
Worldwide
</li>
</label>
</ul>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_crypto" name="filters_crypto" value="checkboxValue" class="gameFilteringInput">
<label for="filters_crypto" class="gameFilteringLabel customGameFilteringLabel">
Crypto friendly
</label>
</div>
<div class="gameFilteringCategories">
<h4 class="gameFilteringTitle">Categories</h4>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="1" name="1" value="checkboxValue" class="gameFilteringInput">
<label for="1" class="gameFilteringLabel">
View all
</label>
<div class="gameFilteringTotalProviders">118</div>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_card_games" name="filters_card_games" value="checkboxValue" class="gameFilteringInput">
<label for="filters_card_games" class="gameFilteringLabel">
Card games
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_casual" name="filters_casual" value="checkboxValue" class="gameFilteringInput">
<label for="filters_casual" class="gameFilteringLabel">
Casual games
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_dealers" name="filters_dealers" value="checkboxValue" class="gameFilteringInput">
<label for="filters_dealers" class="gameFilteringLabel">
Live dealers
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_lotteries" name="filters_lotteries" value="checkboxValue" class="gameFilteringInput">
<label for="filters_lotteries" class="gameFilteringLabel">
Lotteries
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_roulette" name="filters_roulette" value="checkboxValue" class="gameFilteringInput">
<label for="filters_roulette" class="gameFilteringLabel">
Roulette
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_slots" name="filters_slots" value="checkboxValue" class="gameFilteringInput">
<label for="filters_slots" class="gameFilteringLabel">
Slots
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_sports" name="filters_sports" value="checkboxValue" class="gameFilteringInput">
<label for="filters_sports" class="gameFilteringLabel">
Virtual sports
</label>
</div>
<div class="gameFilteringCheckbox">
<input type="checkbox" id="filters_table_games" name="filters_table_games" value="checkboxValue" class="gameFilteringInput">
<label for="filters_table_games" class="gameFilteringLabel">
Table games
</label>
</div>
</div>
<div class="gameFilteringSort" id="gameFilteringSort">
<div class="gameFilteringSortLetters">
<div class="gameFilteringSortLetter">A</div>
<div class="gameFilteringSortLetter">Z</div>
</div>
<div class="gameFilteringSortImg">
<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.8197 0H2.18031C1.75789 0.000335382 1.34466 0.124282 0.990752 0.356798C0.636846 0.589314 0.357486 0.920402 0.186578 1.30988C0.0156695 1.69935 -0.0394398 2.13047 0.0279385 2.55092C0.0953167 2.97136 0.282286 3.36304 0.566154 3.67843L7.77733 11.6745V19.2157C7.7774 19.3631 7.81866 19.5075 7.8964 19.6323C7.97414 19.7572 8.0852 19.8574 8.21685 19.9216C8.32206 19.9739 8.43793 20.0007 8.55524 20C8.73204 19.9998 8.90352 19.939 9.04143 19.8274L10.5 18.651L12.931 16.6902C13.0219 16.6168 13.0954 16.5237 13.1459 16.4178C13.1963 16.3119 13.2226 16.1959 13.2227 16.0784V11.6745L20.4338 3.67843C20.7177 3.36304 20.9047 2.97136 20.9721 2.55092C21.0394 2.13047 20.9843 1.69935 20.8134 1.30988C20.6425 0.920402 20.3632 0.589314 20.0092 0.356798C19.6553 0.124282 19.2421 0.000335382 18.8197 0Z" fill="#440090" fill-opacity="0.8" />
</svg>
</div>
<div class="gameFilteringSortText">Sort by name</div>
</div>
<script>
let selectedOption = document.getElementById("selectedOption");
let dropdownList = document.getElementById("dropdownList");
let arrow = document.getElementById("arrow");
let customDropdown = document.getElementById("customDropdown");
var selectedValue;
isVisible = dropdownList.style.display;
arrow.classList.remove("active");
// Toggle the dropdown visibility
selectedOption.addEventListener("click", function () {
isVisible = dropdownList.style.display;
if (isVisible === "none" || isVisible === "") {
dropdownList.style.display = "block";
customDropdown.style.marginBottom = "240px";
} else {
dropdownList.style.display = "none";
customDropdown.style.marginBottom = "0";
}
arrow.classList.toggle("active");
});
// Handle option selection
dropdownList.addEventListener("click", function (event) {
if (event.target.tagName === "LI") {
selectedOption.textContent = event.target.textContent;
selectedValue = event.target.getAttribute("data-value"); // Store the selected value
let checkboxes = document.querySelectorAll('.gameFilteringInput');
let checkedCheckboxesRegions = [];
checkboxes.forEach(function(checkbox) {
if (checkbox.checked) {
checkedCheckboxesRegions.push(checkbox.id);
}
});
let providerItems = document.querySelectorAll('.providersItem');
let hidenProviderItems = document.querySelectorAll('.hiddenProviders');
providerItems.forEach(function(item) {
let filterIdElements = item.querySelectorAll('.filterId');
let showItem = false;
let itemOptionsRegions = [];
filterIdElements.forEach(function(filterIdElement) {
let itemOption = filterIdElement.textContent.trim();
itemOptionsRegions.push(itemOption);
if (selectedValue === itemOption && checkedCheckboxesRegions.some(option => itemOptionsRegions.includes(option))) {
showItem = true;
}
if (selectedValue === itemOption && checkedCheckboxesRegions.length === 0) {
showItem = true;
}
if (selectedValue === 'view_all_regions' && checkedCheckboxesRegions.some(option => itemOptionsRegions.includes(option))) {
showItem = true;
}
})
if (showItem) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
let allListCheckboxes = document.querySelectorAll('.gameFilteringInputList');
if (selectedValue === 'view_all_regions' && checkedCheckboxesRegions.length === 0) {
providerItems.forEach(function(item) {
item.style.display = 'block';
});
Array.from(allListCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = false;
});
hidenProviderItems.forEach(function(item) {
item.style.display = 'none';
})
}
let showAllButton = document.querySelector('.showAllButton');
showAllButton.style.display = 'flex';
if (selectedValue.length > 0) {
showAllButton.style.display = 'none';
} if (selectedValue === 'view_all_regions') {
showAllButton.style.display = 'flex';
}
let prevSelectedLi = dropdownList.querySelector(".selected");
if (prevSelectedLi) {
prevSelectedLi.classList.remove("selected");
prevSelectedLi.style.backgroundColor = "";
prevSelectedLi.style.color = "#440090";
}
event.target.classList.add("selected");
event.target.style.backgroundColor = "#440090";
event.target.style.color = "#fff";
dropdownList.style.display = "none";
customDropdown.style.marginBottom = "0";
arrow.classList.remove("active");
}
});
function updateViewAllListsCheckbox(checkbox) {
let checkboxes = Array.from(document.querySelectorAll('.gameFilteringInputList'));
let anyCheckboxChecked = checkboxes.some(checkbox => checkbox.checked);
checkboxes.forEach(cb => {
if (cb !== checkbox) {
cb.checked = false;
}
});
};
Array.from(document.querySelectorAll('.gameFilteringInputList')).forEach(checkbox => {
checkbox.addEventListener('change', () => updateViewAllListsCheckbox(checkbox));
});
// Close the dropdown if the user clicks outside
document.addEventListener("click", function (event) {
if (!selectedOption.contains(event.target) && !dropdownList.contains(event.target)) {
dropdownList.style.display = "none";
customDropdown.style.marginBottom = "0";
arrow.classList.remove("active");
}
});
// Sort by order
sortOrder = 'asc';
let lettersElement = document.querySelector('.gameFilteringSortLetters');
let gameFilteringSortImg = document.querySelector('.gameFilteringSortImg');
let isReversed = false;
let svgElement = gameFilteringSortImg.querySelector('svg')
document.getElementById('gameFilteringSort').addEventListener('click', function () {
sortImages();
isReversed = !isReversed;
lettersElement.style.transition = 'flex-direction 0.3s ease';
gameFilteringSortImg.style.transition = 'transform 0.3s ease';
if (isReversed) {
lettersElement.style.flexDirection = 'column-reverse';
gameFilteringSortImg.style.transform = 'rotate(180deg)';
svgElement.style.margin = '0 0 0 -3px';
} else {
lettersElement.style.flexDirection = 'column'; gameFilteringSortImg.style.transform = ''; svgElement.style.margin = '-1px 0 0 3px';
}
});
function sortImages() {
let container = document.querySelectorAll('.providersItem');
let visibleContainers = Array.from(container).filter(item => getComputedStyle(item).display !== 'none');
visibleContainers.sort(function (a, b) {
let titleA = a.querySelector('img').getAttribute('title').toLowerCase();
let titleB = b.querySelector('img').getAttribute('title').toLowerCase();
return sortOrder === 'desc' ? titleA.localeCompare(titleB) : titleB.localeCompare(titleA);
});
sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
let parent = container[0].parentNode;
Array.from(parent.children).forEach(child => {
if (visibleContainers.includes(child)) {
parent.removeChild(child);
}
});
visibleContainers.forEach(function (item) {
parent.appendChild(item);
});
}
function updateViewAllCheckbox() {
let anyCheckboxChecked = Array.from(document.querySelectorAll('.gameFilteringInput')).slice(2).some(checkbox => checkbox.checked);
if (anyCheckboxChecked) {
document.getElementById('1').checked = false;
} };
Array.from(document.querySelectorAll('.gameFilteringInput')).slice(2).forEach(checkbox => {
checkbox.addEventListener('change', updateViewAllCheckbox);
});
// show array with all ids
document.getElementById('1').addEventListener('change', function () {
let allCheckboxes = document.querySelectorAll('.gameFilteringInput');
if (document.getElementById('1').checked) {
Array.from(allCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = true;
});
} else {
Array.from(allCheckboxes).slice(2).forEach(function(checkbox) {
checkbox.checked = false;
});
}
})
document.querySelectorAll('.gameFilteringInput').forEach(function(checkbox) {
checkbox.addEventListener('change', getCheckedCheckboxes);
});
function getCheckedCheckboxes() {
let checkboxes = document.querySelectorAll('.gameFilteringInput');
let checkedCheckboxes = [];
checkboxes.forEach(function(checkbox) {
if (checkbox.checked) {
checkedCheckboxes.push(checkbox.id);
}
});
let providerItems = document.querySelectorAll('.providersItem');
let hidenProviderItems = document.querySelectorAll('.hiddenProviders');
let checkedRegion = selectedValue && selectedValue !== 'view_all_regions';
providerItems.forEach(function(item) {
let filterIdElements = item.querySelectorAll('.filterId');
let showItem = false;
let optionsArray = [];
filterIdElements.forEach(function(filterIdElement) {
let itemId = filterIdElement.textContent.trim();
optionsArray.push(itemId);
})
if (checkedRegion && checkedCheckboxes.some(option => optionsArray.includes(option))) {
showItem = true;
}
if (checkedCheckboxes.some(option => optionsArray.includes(option))) {
showItem = true;
}
if (checkedRegion && !optionsArray.includes(selectedValue)) {
showItem = false;
}
if (checkedRegion && checkedCheckboxes.length < 1 && optionsArray.includes(selectedValue)) {
showItem = true;
}
if (showItem) {
item.style.display = 'block';
} else {
item.style.display = 'none';
}
});
if (!checkedRegion && checkedCheckboxes.length < 1) {
providerItems.forEach(function(item) {
item.style.display = 'block';
});
hidenProviderItems.forEach(function(item) {
item.style.display = 'none';
})
}
let showAllButton = document.querySelector('.showAllButton');
showAllButton.style.display = 'flex';
if (checkboxes.length > 0) {
const isAnyCheckboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
if (isAnyCheckboxChecked) {
showAllButton.style.display = 'none';
}
}
if (checkedRegion) {
showAllButton.style.display = 'none';
}
}
</script>
</div>
<div class="providersListWrapper" id="providersList">
<a href="games/boldplay-games.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/boldplay_red.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/boldplay_red.png" alt="Boldplay Games" title="Boldplay Games" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/pragmatic-play.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/pragmatic-play-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/pragmatic-play-provider.png" alt="pragmatic play games" title="Pragmatic Play" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/evolution-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/evolution-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/evolution-gaming-provider.png" alt="evolution casino games" title="Evolution Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_worldwide</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/hacksaw-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/hacksaw.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/hacksaw.png" alt="HackSaw
Gaming" title="HackSaw
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/netent.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/NetEnt.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/NetEnt.png" alt="netent casino games" title="NetEnt" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/nolimit-city.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Nolimit-City.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Nolimit-City.png" alt="nolimit city slot" title="Nolimit City" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/rubyplay.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/images-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/images-removebg-preview.png" alt="RubyPlay" title="RubyPlay" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/relax-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/relax-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/relax-gaming-provider.png" alt="Relax Gaming" title="Relax Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/red-tiger-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Red-Tiger-Gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Red-Tiger-Gaming.png" alt="tiger gaming casino" title="Red Tiger Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/pocket-games-soft.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/imgonline-com-ua-BigPicture-wdkcDuEXDb16yu.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/imgonline-com-ua-BigPicture-wdkcDuEXDb16yu.png" alt="Pocket Games Soft" title="Pocket Games Soft" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/playson.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/playson-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/playson-provider.png" alt="Playson" title="Playson" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/skywind.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/WW__1_-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/WW__1_-removebg-preview.png" alt="Skywind" title="Skywind" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/push-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/push-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/push-gaming-provider.png" alt="Push Gaming" title="Push Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/spribe.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Spribe__1_-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Spribe__1_-removebg-preview.png" alt="Spribe" title="Spribe" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
<p class="filterId" style="display: none">filters_card_games</p>
</div>
</div>
</a>
<a href="games/felix-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/felix-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/felix-gaming-provider.png" alt="Felix
Gaming" title="Felix
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/ka-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/kagaming-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/kagaming-gaming-provider.png" alt="KA
Gaming" title="KA
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/allwayspin-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/AWSLOGO-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/AWSLOGO-removebg-preview.png" alt="AllWaySpin
Gaming" title="AllWaySpin
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/egt-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/egt-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/egt-gaming-provider.png" alt="EGT
Gaming" title="EGT
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/greentube-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/greentube-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/greentube-gaming-provider.png" alt="Greentube
Gaming" title="Greentube
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/mr-slotty-game-provider.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/mrslotty.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/mrslotty.png" alt="Mr. Slotty
Game Provider" title="Mr. Slotty
Game Provider" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/mascot-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/mascot_games.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/mascot_games.png" alt="Mascot Gaming" title="Mascot Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/agt-software.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/AGT__1___problembo.com_-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/AGT__1___problembo.com_-removebg-preview.png" alt="AGT Software" title="AGT Software" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/amigo-gaming.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Amigo (1).png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Amigo%20(1).png" alt="Amigo Gaming" title="Amigo Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/elbet-games.html" class="providersItem">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/el-bet.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/el-bet.png" alt="Elbet" title="Elbet" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/evenbet-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/evenbet-gaming-log.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/evenbet-gaming-log.png" alt="Evenbet Gaming" title="Evenbet Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/jili-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/JILI.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/JILI.png" alt="Jili Games" title="Jili Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/bgaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/bgaming-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/bgaming-gaming-provider.png" alt="BGaming" title="BGaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/charismatic-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/charismatic-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/charismatic-gaming-provider.png" alt="Charismatic Games" title="Charismatic Games" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/v8poker.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/v8-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/v8-removebg-preview.png" alt="V8 Poker" title="V8 Poker" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
<p class="filterId" style="display: none">filters_card_games</p>
</div>
</div>
</a>
<a href="games/turbo-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Turbo-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Turbo-removebg-preview.png" alt="Turbo Games" title="Turbo Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/lucky-streak.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/luckystreak-logo1.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/luckystreak-logo1.png" alt="Lucky Streak" title="Lucky Streak" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/amatic.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Amatic.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Amatic.png" alt="Amatic Industries" title="Amatic Industries" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/wazdan.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/wazdan-logo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/wazdan-logo.png" alt="Wazdan" title="Wazdan" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/triple-profits-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/tpg-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/tpg-gaming-provider.png" alt="Triple Profits Games" title="Triple Profits Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/splitrock-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/split.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/split.png" alt="Splitrock Gaming" title="Splitrock Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/gamzix.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/GAM 1.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/GAM%201.png" alt="Gamzix" title="Gamzix" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/elk-studios.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/js-elk-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/js-elk-provider.png" alt="Elk Studios" title="Elk Studios" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/cq9-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/cq9gaming-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/cq9gaming-removebg-preview.png" alt="CQ9 Gaming" title="CQ9 Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/big-time-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/big-time-gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/big-time-gaming.png" alt="Big Time Gaming" title="Big Time Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/wizard-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/wizard_logo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/wizard_logo.png" alt="Wizard Games" title="Wizard Games" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/spinberry.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Spin.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Spin.png" alt="Spinberry" title="Spinberry" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/onlyplay.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Onlyplay-logo-1.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Onlyplay-logo-1.png" alt="Onlyplay" title="Onlyplay" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/netgaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/n logo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/n%20logo.png" alt="NetGaming" title="NetGaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/netgame-entertainment.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/netgame-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/netgame-gaming-provider.png" alt="NetGame Entertainment" title="NetGame Entertainment" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/microgaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Microgaming_Logo-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Microgaming_Logo-removebg-preview.png" alt="Microgaming" title="Microgaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/elysium-studios.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/elysium-logo-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/elysium-logo-removebg-preview.png" alt="Elysium Studios" title="Elysium Studios" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/eurasian-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/eurasian-gaming (1).png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/eurasian-gaming%20(1).png" alt="Eurasian Gaming" title="Eurasian Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/ct-gaminng.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/CT-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/CT-removebg-preview.png" alt="CT Gaming" title="CT Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/ct-interactive.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/CTGI.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/CTGI.png" alt="CT Interactive" title="CT Interactive" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
</div>
</div>
</a>
<a href="games/galaxsys.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Galaxsys-logo-RGB-3_2-1200x630-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Galaxsys-logo-RGB-3_2-1200x630-removebg-preview.png" alt="Galaxsys" title="Galaxsys" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/imagine-live.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Im-removebg-preview (1).png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Im-removebg-preview%20(1).png" alt="Imagine Live" title="Imagine Live" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/7mojos.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/7mo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/7mo.png" alt="7Mojos" title="7Mojos" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/apollo-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/apolloGames.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/apolloGames.png" alt="Apollo Games" title="Apollo Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/betsolutions.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/betsolutions-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/betsolutions-gaming-provider.png" alt="BetSolutions" title="BetSolutions" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_region_middle_east</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/coggstudios.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Final_05-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Final_05-removebg-preview.png" alt="Cogg Studios" title="Cogg Studios" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_sports</p>
</div>
</div>
</a>
<a href="games/fazi.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/fazi-software-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/fazi-software-removebg-preview.png" alt="Fazi" title="Fazi" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/fugaso.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/fugaso-logo152222476-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/fugaso-logo152222476-removebg-preview.png" alt="Fugaso" title="Fugaso" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/funky-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Funky-Games-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Funky-Games-removebg-preview.png" alt="Funky Games" title="Funky Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/funta-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/FunTaGaming.png..png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/FunTaGaming.png..png" alt="FunTa Gaming" title="FunTa Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/gamesinc.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/GAMESINC.png..png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/GAMESINC.png..png" alt="Games Inc" title="Games Inc" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/hollywoodtv.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/hollywood_tv-removebg-preview (1).png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/hollywood_tv-removebg-preview%20(1).png" alt="Hollywood TV" title="Hollywood TV" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/mancala-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/mancala-gaming-logo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/mancala-gaming-logo.png" alt="Mancala Gaming" title="Mancala Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/spinthon.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/spi-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/spi-removebg-preview.png" alt="Spinthon" title="Spinthon" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/truelab-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/truelab-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/truelab-gaming-provider.png" alt="TrueLab Game Studios" title="TrueLab Game Studios" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/virtual-generation.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Vg.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Vg.png" alt="Virtual Generation" title="Virtual Generation" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
</div>
</div>
</a>
<a href="games/xpg.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/xpro-gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/xpro-gaming.png" alt="XProGaming" title="XProGaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
<p class="filterId" style="display: none">filters_card_games</p>
</div>
</div>
</a>
<a href="games/zeusplay.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/zeusplay-logo-color-1350x461-copy-1.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/zeusplay-logo-color-1350x461-copy-1.png" alt="Zeusplay" title="Zeusplay" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/pascalgaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Pascal-Gaming_m-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Pascal-Gaming_m-removebg-preview.png" alt="Pascal Gaming" title="Pascal Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/ebet.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/eBet.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/eBet.png" alt="eBet" title="eBet" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/ladyluckgames.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Lady-Luck-Games.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Lady-Luck-Games.png" alt="Lady Luck Games" title="Lady Luck Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_worldwide</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/printstudios.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Print-studios-logo-.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Print-studios-logo-.png" alt="Print Studios" title="Print Studios" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/quickspin.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/QUI.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/QUI.png" alt="Quickspin" title="Quickspin" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/realtimegaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Realtime-Gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Realtime-Gaming.png" alt="Realtime Gaming" title="Realtime Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/pariplay.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/pariplay-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/pariplay-provider.png" alt="Pariplay" title="Pariplay" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/ezugi.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/ezugi-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/ezugi-provider.png" alt="Ezugi" title="Ezugi" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/smartsoft-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/smartsoft-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/smartsoft-gaming-provider.png" alt="Smartsoft" title="Smartsoft" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/golden-race.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/goldenrace-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/goldenrace-provider.png" alt="Goldenrace" title="Goldenrace" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
</div>
</div>
</a>
<a href="games/tvbet.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/tvbet-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/tvbet-provider.png" alt="TVBET" title="TVBET" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/tom-horn-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/tom-horn-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/tom-horn-gaming-provider.png" alt="Tom Horn Gaming" title="Tom Horn Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/habanero.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/habanero-systems-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/habanero-systems-provider.png" alt="Habanero Slot Games" title="Habanero Systems" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_region_central_america</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/endorphina.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/endorphina-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/endorphina-provider.png" alt="Endorphina" title="Endorphina" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/spinmatic.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/spinmatic-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/spinmatic-provider.png" alt="Spinmatic" title="Spinmatic" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_casual</p>
</div>
</div>
</a>
<a href="games/vivo-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/vivo-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/vivo-gaming-provider.png" alt="Vivo Gaming" title="Vivo Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/highlight-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Highlights-Games.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Highlights-Games.png" alt="Highlights Games" title="Highlights Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
</div>
</div>
</a>
<a href="games/espresso-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/espresso-games-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/espresso-games-provider.png" alt="Espresso Games" title="Espresso Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/red-rake-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Red-Rake-Gaming-removebg-preview.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Red-Rake-Gaming-removebg-preview.png" alt="Red Rake
Gaming" title="Red Rake
Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/booongo.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Booongo.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Booongo.png" alt="Booongo" title="Booongo" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/1x2-network.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/1x2-network-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/1x2-network-provider.png" alt="1x2 Network" title="1x2 Network" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/leap-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Leap-Gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Leap-Gaming.png" alt="Leap Gaming" title="Leap Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/iron-dog-studio.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/iron-dog-studio.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/iron-dog-studio.png" alt="Iron Dog Studio" title="Iron Dog Studio" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/platipus-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/platipus-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/platipus-gaming-provider.png" alt="Platipus Gaming" title="Platipus Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/gameart.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/gameart-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/gameart-provider.png" alt="GameArt" title="GameArt" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/dragoon-soft.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/dragoon-soft-providers.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/dragoon-soft-providers.png" alt="Dragoon Soft" title="Dragoon Soft" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/thunderkick.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Thunderkick.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Thunderkick.png" alt="Thunderkick" title="Thunderkick" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/betgames.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/BetGames.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/BetGames.png" alt="betgame lucky 7" title="BetGames" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
<p class="filterId" style="display: none">filters_lotteries</p>
</div>
</div>
</a>
<a href="games/woohoo-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Woohoo-Games.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Woohoo-Games.png" alt="Woohoo Games" title="Woohoo Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/bet-industries.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/bet-industries-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/bet-industries-provider.png" alt="Bet Industries" title="Bet Industries" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/triple-cherry.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/triple-cherry-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/triple-cherry-provider.png" alt="Triple Cherry" title="Triple Cherry" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/simpleplay.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/SimplePlay.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/SimplePlay.png" alt="SimplePlay" title="SimplePlay" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/bb-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/bb-games.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/bb-games.png" alt="BB Games" title="BB Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/evoplay-entertainment.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/evoplay-entertainment-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/evoplay-entertainment-provider.png" alt="Evoplay Entertainment" title="Evoplay Entertainment" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/caleta-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/caleta-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/caleta-gaming-provider.png" alt="Caleta Gaming" title="Caleta Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/blueprint-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Blueprint-Gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Blueprint-Gaming.png" alt="blue print games" title="Blueprint Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/revolver-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Revolver-Gaming.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Revolver-Gaming.png" alt="Revolver Gaming" title="Revolver Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/kiron-interactive.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/kiron-interactive-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/kiron-interactive-provider.png" alt="Kiron Interactive" title="Kiron Interactive" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/rtg-slots.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/rtg-slots-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/rtg-slots-provider.png" alt="RTG Slots" title="RTG Slots" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/jackpot-software.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/jackpot-software-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/jackpot-software-provider.png" alt="Jackpot Software" title="Jackpot Software" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/august-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/august-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/august-gaming-provider.png" alt="August Gaming" title="August Gaming" />
</picture>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/onetouch.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/one-touch-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/one-touch-provider.png" alt="OneTouch Provider" title="OneTouch Provider" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/kalamba-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/kalamba-games-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/kalamba-games-provider.png" alt="Kalamba Games" title="Kalamba Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/omi-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/omi-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/omi-gaming-provider.png" alt="OMI Gaming" title="OMI Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
</div>
</div>
</a>
<a href="games/slotmill.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/slotmill-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/slotmill-provider.png" alt="Slotmill" title="Slotmill" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
</div>
</div>
</a>
<a href="games/playpearls.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/playpearls-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/playpearls-provider.png" alt="PlayPearls" title="PlayPearls" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/fantasma-games.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/fantasma-games-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/fantasma-games-provider.png" alt="Fantasma Games" title="Fantasma Games" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/spearhead-studios.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/spearhead-studios-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/spearhead-studios-provider.png" alt="Spearhead Studios" title="Spearhead Studios" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_asia</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/mobilots.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/mobilots-providers.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/mobilots-providers.png" alt="Mobilots" title="Mobilots" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_region_south_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_sports</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/gamefish-global.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/Gamefish-global.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/Gamefish-global.png" alt="Gamefish Global" title="Gamefish Global" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
<a href="games/yggdrasil-gaming.html" class="providersItem hiddenProviders" style="display: none">
<div class="providersInfo">
<div class="providersImageWrapper">
<picture>
<source srcset="/glide/@public/provider/yggdrasil-gaming-provider.png?fm=webp" type="image/webp">
<img loading="lazy" src="glide/%40public/provider/yggdrasil-gaming-provider.png" alt="Yggdrasil Gaming" title="Yggdrasil Gaming" />
</picture>
<p class="filterId" style="display: none">filters_crypto</p>
<p class="filterId" style="display: none">filters_region_europe</p>
<p class="filterId" style="display: none">filters_region_north_america</p>
<p class="filterId" style="display: none">filters_slots</p>
<p class="filterId" style="display: none">filters_roulette</p>
<p class="filterId" style="display: none">filters_dealers</p>
<p class="filterId" style="display: none">filters_table_games</p>
</div>
</div>
</a>
</div>
<div class="showAllButton mainButton" onclick="showAllProviders()">
<div class="mainButtonText">See all</div>
<div class="mainButtonArrow"></div>
</div>
</div>
</div>
</div>
<section class="onlineSection" itemscope itemtype="https://schema.org/FAQPage">
<div class="container">
<h2 class="gamesTabsTitle darkPurple">
Online Casino Games
</h2>
<div class="innerRow">
<div class="innerBtn">
<div class="innerBtnText" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
<h2 class="itemBtn active" data-id="1" itemprop="name">
Game Categories
</h2>
<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
<div class="item active" data-text="1" itemprop="text">
<ul><li>Casino games - over 110 iGaming brands, including world-renowned online casino software providers on the market. NuxGame offers a vast collection of online casino games, including slots, video poker, card games, table games, roulette, scratch cards, instant win games, bingo, etc.</li><li>Live dealer games - offering top-notch live casino brands and spectacular live titles like poker, blackjack, roulette, baccarat, keno, bet on numbers, etc.</li><li>Virtual sports games - a diverse portfolio which includes soccer, horse racing, greyhound racing, cycling, tennis, motorbikes, ping-pong, ice hockey, car racing, and many others.<br></li></ul>
</div>
</div>
</div>
<div class="innerBtnText" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
<h2 class="itemBtn " data-id="2" itemprop="name">
How to Choose Casino Game Providers
</h2>
<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
<div class="item " data-text="2" itemprop="text">
<p>In order to make an informed choice of providers and gaming content for a casino website, it is recommended to research the targeted market. To do that, one must define what are its popular game genres, providers, sports, and gaming titles.</p><p>Likewise, making sure the provider is licensed to operate in the jurisdiction of your choice. We strongly recommend using only trusted casino software suppliers.</p><p>Check out the list of casino software providers available using the demo version of the platform.<br></p>
</div>
</div>
</div>
<div class="innerBtnText" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
<h2 class="itemBtn " data-id="3" itemprop="name">
Advantages
</h2>
<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
<div class="item " data-text="3" itemprop="text">
<ul><li>All-in-one platform - ready-to-launch iGaming solution for building a fully-fledged online casino website from scratch.</li><li>Free demo - fully-functional demo version featuring all casino gaming content.</li><li>Legal consulting - professional legal support, licensing assistance, and global jurisdictions consulting.</li><li>Leading iGaming brands - 110+ online casino providers, 11,700+ game titles, top live casino brands, virtual sports, etc.</li><li>Customizable software - scalable, easily adjustable platform, compatible with any third-party software.<br></li></ul>
</div>
</div>
</div>
<div class="innerBtnText" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
<h2 class="itemBtn " data-id="4" itemprop="name">
Casino Game Integrations
</h2>
<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
<div class="item " data-text="4" itemprop="text">
<ul><li>Compile your own casino portfolio - swift and effortless integration of casino game suppliers.</li><li>Build a complete platform - universal Turnkey solution that allows building a fully-featured, ready-to-launch online casino within a few days.</li><li>Simple API Integration - fast and practical integration of iGaming content via an API interface. Allowing integration of casino games into the website almost instantly. It is a resource-saving solution that suits businesses of any scale.</li><li>With the API solution, you can integrate separate games or entire gaming libraries of casino game developers.</li></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="readyToStartSection">
<div class="container">
<div class="innerWrap">
<div class="animationsWrapper">
<div class="relativeWrapper">
<div class="big_triangle">
<img src="img/animations/newBig_anim.svg" />
</div>
<div class="middle_triangle">
<img src="img/animations/newMiddle_anim.svg" />
</div>
<div class="small_ball">
<img src="img/animations/big_ball.svg" />
</div>
</div>
</div>
<h2>
Ready to Start?
</h2>
<p class="txt maxWidth">
Have any questions concerning game providers? Feel free to contact us right now!
</p>
<a href="contact-us.html" class="animateBtn">
<div class="button__text">
Contact us
</div>
<div class="button__wrapper">
<div class="button__arrow"></div>
<div class="button__border-circle"></div>
<div class="button__mask-circle">
<div class="button__small-circle"></div>
</div>
</div>
</a>
</div>
</div>
</section>
</div>

<?php include '../layouts/footer.php' ?>
<?php include '../layouts/footer-link.php' ?>
</main>
<script>
    $(function() {
    $('.header').addClass('Header_inner');
});
</script>