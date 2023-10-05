export default function splide() {

  const options = {
    cover: true,
    heightRatio: 0.5,
    perMove: 1,
    gap: 16,
    updateOnMove: true,
    padding: "5rem",
    type: "loop",
    focus: "center",
    autoplay: "true",
    interval: "3000",
    speed: 4000,
    pageOnFocus: false
  }

  const splide = new Splide('.splide', options);
  splide.mount();
}
