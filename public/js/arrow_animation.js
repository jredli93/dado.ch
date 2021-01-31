const snap = Snap("#svg");
const path1 = snap.path("M0 198C78.3582 129.123 107.04 135.579 153 198C221.174 269.082 258.502 263.391 324 198C378.863 139.475 408.806 141.767 461 198");
const path2 = snap.path("M0 50 450 50"); 

const isEven = num => num / 2 === 0; 

const createPath = (path, dashWidth = 20) => {
  const length = path.getTotalLength();
  const count = Math.floor(length/dashWidth);
  // amount of dash shouldn`t be even for line ends by dash
  const dashCount = isEven(count)? count + 1: count;
  const strokeDasharray = Array.from({ length: dashCount },() => dashWidth).join(" ");

  path.attr({ 
    stroke: "#fff",
    fill: "none",
    strokeWidth: 4,
    strokeDasharray: `${strokeDasharray} ${length + dashWidth}`,
    strokeDashoffset: length 
  });

  return path;
};
 
//path 1
const line1 = createPath(path1); 
const tip1 = snap.polyline("0,30 15,0 30,30").attr({ opacity: 0, fill: "#fff" });
  
//path 2
const line2 = createPath(path2, 10);  
const tip2 = snap.polyline("0,0 30,15 0,30").attr({ opacity: 0, fill: "#fff" });


const animateLine = (line, tip, isRotateTip) => {
  const length = line.getTotalLength();
  tip.attr({ opacity: 1 });
 
  const stepFn = step => {
    const point = line.getPointAtLength(step);
    line.attr({ "stroke-dashoffset": length - step });
    tip.transform(`t${point.x - 15},${point.y - 15}r${isRotateTip?point.alpha - 90 : ''}`);
  };
 
  Snap.animate(0, length, stepFn, 1500, mina.easeinout);
};

const button = Snap('#button');
button.click(() => { 
  animateLine(line2, tip2, false);
  setTimeout(() => animateLine(line1, tip1, true), 1500);  
});