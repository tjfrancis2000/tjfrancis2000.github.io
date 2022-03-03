<!DOCTYPE html>
<?php 
	
$binaryMaze = "110111101001101011101010011110010111011011011110101010011110100111110101111010110111101010100101001001010000111100001110011001010001010110111010110100010010110001101110010000111010011110000111101011001101011010001010011101110001011000110011100010100100000111010110101010110010111000101011100100010011110100001100011000111011110001011110101110111010101111001001110010011011000110101010110001110101100101110110000101110111000010000110000010000111101011110011011001110111010011000100001110101100010011100110001011001110101110111100110010011000110011001101010110110011100111000110101010010110011001011001010110000101010110010111001111100100001100010010010010100101100111010110000010111000001100101111000010101100001111000010101001100110010111011001110010010111010110110110101010110010001011010101100111001100110101101011110011100011001011010110001010001110010101000100111101010000011001100101011100111000100100110001111000110111011001100011000111101010000101011010011010000110101010101110010100101110110101010010110001101011101101000100110111000100000011010111100110111011100011001110000010010111010110100000010100100101110110011010101001111101110101110010000111001011100111010010101010110100101110010101001100110010101111011000100110001101001011100101101010011000111001100010011100110010100111001000110010011001100110010111000101010101111110110011010100010000101111010001010011100101101111010011110000110100000101001110001100010110101010011110101010001101111110011000111000011010011010001100111010010111000110011101101110101110010100110011100010001110001110001100111011011100111001001010101100110100001100100001011011110001110010011010001001011001101000010001011100100111001100110110011101011111011001001010101101010100001110101011101011110110011100010001100100110100001101000011001101110111000110001110100111000100011000100001110011001101101100101110101001001001110011001010101100110101000110101100101110011011001001010001000011100110001111001101110000101000111100100110011111100001011101011101011000101010110111100001100111010101100010100100100101101110110010101100011001000011100100010011011100001011011001100010101110101110110110111001100010010101111001101010100010101001110011001111100001100111010100110101010110100000101010111100010000011001101110111011110001010011100100011001100011000010100100110011110011101101100011011111001100100010000110101010100111101001101011110011100011011100110011011000100110101001001001100011010101011100110011101101000100111001001101110000110011101010111001100110001101100101011010011101001101011101001111000101011111001100110001010101010110101100111100101101000011110100001010101001000101001100010000100011100110010100101011000111011101011100101001111000111110001100011001111011001110011110010111010111101000010111011001001100101111001100010110100110110011001011001001100010110000100011000101110011100011001100110101011001111010100101110110000101101001100101110001110111000111100010010110001001100001110011001011010100101000110100101010111011100110111010110001100101010010110011101101001011101001100010011100110101010110101000010001110001000101110001110110010101010101000111010110111001101010101110001010111101001110011000111001100100001010110110010010101100110000101110011100001010001001010111001101001001101000010110011001100110010110100001111011100110001011110111010101001000101100101001101011110010101110011101001110100110111000001001001010111011011010100110001100011100011101010101110001101100001101100000110001101101101011001100101000111011101110110011001011101010110011011001100100100101010100011100100101001010111100111101000101010110001001011000000101101001010101111010101011101010000110101001010110011010000001100010101011110001001111000101001011000010011101001101001110011011101010101110011111111000110001010100011110100011100110011011011010001100011101011001011000010111000110010110111011001101101100111100101011100111010001000110110100001111000011010011000001101100001110110101101011010111111011110110111111101110";
$width = 45;
$height = 45;
$shortestPath = array(array(1,1), array(1,2), array(1,3), array(2,3), array(2,4), array(2,5), array(2,6), array(2,7), array(3,7), array(3,6), array(4,6), array(5,6), array(5,7), array(4,7), array(4,8), array(4,9), array(5,9), array(6,9), array(7,9), array(7,10), array(7,11), array(7,12), array(7,13), array(6,13), array(5,13), array(5,14), array(4,14), array(4,15), array(5,15), array(5,16), array(6,16), array(7,16), array(8,16), array(8,15), array(9,15), array(10,15), array(10,14), array(10,13), array(9,13), array(9,12), array(9,11), array(10,11), array(10,10), array(9,10), array(9,9), array(8,9), array(8,8), array(8,7), array(9,7), array(9,6), array(10,6), array(11,6), array(11,7), array(11,8), array(12,8), array(12,9), array(12,10), array(11,10), array(11,11), array(11,12), array(12,12), array(13,12), array(14,12), array(14,13), array(14,14), array(15,14), array(16,14), array(16,15), array(15,15), array(15,16), array(14,16), array(13,16), array(13,17), array(14,17), array(14,18), array(14,19), array(15,19), array(16,19), array(16,18), array(16,17), array(17,17), array(18,17), array(18,18), array(17,18), array(17,19), array(18,19), array(18,20), array(18,21), array(19,21), array(19,20), array(20,20), array(20,21), array(21,21), array(21,20), array(21,19), array(20,19), array(20,18), array(21,18), array(21,17), array(22,17), array(23,17), array(23,16), array(22,16), array(22,15), array(23,15), array(23,14), array(22,14), array(21,14), array(20,14), array(20,13), array(20,12), array(20,11), array(19,11), array(19,10), array(20,10), array(20,9), array(19,9), array(19,8), array(20,8), array(20,7), array(20,6), array(21,6), array(21,7), array(22,7), array(22,6), array(22,5), array(21,5), array(21,4), array(21,3), array(22,3), array(22,4), array(23,4), array(23,3), array(24,3), array(24,2), array(23,2), array(23,1), array(24,1), array(25,1), array(26,1), array(27,1), array(28,1), array(28,2), array(28,3), array(27,3), array(27,2), array(26,2), array(26,3), array(26,4), array(26,5), array(27,5), array(27,4), array(28,4), array(28,5), array(28,6), array(27,6), array(27,7), array(28,7), array(28,8), array(28,9), array(29,9), array(29,8), array(30,8), array(30,7), array(29,7), array(29,6), array(29,5), array(29,4), array(30,4), array(31,4), array(31,3), array(32,3), array(33,3), array(33,2), array(33,1), array(34,1), array(34,2), array(34,3), array(35,3), array(36,3), array(36,4), array(36,5), array(35,5), array(35,4), array(34,4), array(33,4), array(33,5), array(32,5), array(32,6), array(32,7), array(33,7), array(33,8), array(34,8), array(34,9), array(35,9), array(35,8), array(35,7), array(35,6), array(36,6), array(36,7), array(37,7), array(37,6), array(37,5), array(37,4), array(38,4), array(38,5), array(39,5), array(39,4), array(39,3), array(39,2), array(40,2), array(40,1), array(41,1), array(41,2), array(42,2), array(42,1), array(43,1), array(44,1), array(45,1), array(45,2), array(44,2), array(44,3), array(45,3), array(45,4), array(44,4), array(43,4), array(43,5), array(43,6), array(44,6), array(44,7), array(44,8), array(44,9), array(43,9), array(43,10), array(44,10), array(45,10), array(45,11), array(45,12), array(45,13), array(45,14), array(45,15), array(45,16), array(45,17), array(45,18), array(44,18), array(44,17), array(43,17), array(43,18), array(43,19), array(43,20), array(44,20), array(44,19), array(45,19), array(45,20), array(45,21), array(45,22), array(45,23), array(45,24), array(45,25), array(45,26), array(45,27), array(44,27), array(44,26), array(43,26), array(43,27), array(42,27), array(42,26), array(41,26), array(40,26), array(40,27), array(41,27), array(41,28), array(41,29), array(42,29), array(43,29), array(43,30), array(44,30), array(45,30), array(45,31), array(44,31), array(44,32), array(45,32), array(45,33), array(44,33), array(44,34), array(44,35), array(45,35), array(45,36), array(44,36), array(44,37), array(45,37), array(45,38), array(44,38), array(44,39), array(45,39), array(45,40), array(45,41), array(44,41), array(44,40), array(43,40), array(42,40), array(42,41), array(42,42), array(41,42), array(41,43), array(41,44), array(41,45), array(42,45), array(43,45), array(44,45), array(44,44), array(44,43), array(44,42), array(45,42), array(45,43), array(45,44), array(45,45));
$shortestPathCost = 316; // Above is blank if no solution
	
?>
<html>
<head>
	<title>Test 4</title>
	<meta name="description" content="test4 description">
	<meta name="keywords" content="test4 keywords">
	<style>
		canvas,#canvasContainer {
			margin: 0px;
			padding: 0px;
			border:0px solid #000000;
			float:left;
		}
		
		#canvasContainer {
			margin-bottom: 8px;
		}
		
		/*::-webkit-scrollbar {
			width: 0px;
			height: 0px
		} */
	</style>
	<script>
		const binaryMaze = <?php echo "\"{$binaryMaze}\""; ?>;
		const width = <?php echo $width; ?>;
		const height = <?php echo $height; ?>;
		const start = [<?php echo "{$shortestPath[0][0]},{$shortestPath[0][1]}"; ?>];
		const finish = [<?php echo "{$shortestPath[count($shortestPath)-1][0]},{$shortestPath[count($shortestPath)-1][0]}"; ?>];
		const shortestPathCost = <?php echo $shortestPathCost; ?>;
		<?php $shortestPathStringArray = [];
		foreach($shortestPath as $node)
		{
			array_push($shortestPathStringArray,"[{$node[0]},{$node[1]}]");
		}
		?>const shortestPath = [<?php echo implode(",",$shortestPathStringArray); ?>];
	</script>
</head>
<body>
	<div id="canvasContainer" style="width:calc(100*550vh/569); height:calc(100*550vh/569); overflow:scroll">
        <canvas id="myCanvas" width="550" height="550"></canvas>
    </div>
	
	<button onClick="SolveMaze()">End</button>
	<script>
		// SETTINGS:
		const stopHoldingKey = false;	
		const minPixelsPerSubcell = 3;
		const fixedContainerSize = false;
		const Colours = {
			"Start" : "rgb(0,255,0)",
			"Finish" : "rgb(255,0,0)",
			"Current" : "rgb(255,255,0)",
			"Path" : "rgb(150,150,255)",
			"Blank" : "rgb(255,255,255)",
			"Solution" : "rgb(0,0,255)"
		}
		
		// VARIABLES:
		var gameRunning = true;
		var stepsWithCycles = 0; // Holds the number of moves made ever during the game
		var currentCell = start;
		var Path = [start];
		var PathDictionary = {};
		var PathConnections = [];
		
		// KEY FUNCTIONS:
		function CoordinatesToCellNumber(coordinates)
		{
			return width*(coordinates[1]-1)+coordinates[0];
		}
		function CellNumberToCoordinates(num)
		{
			let r = Math.floor((num-1) / width)+1;
			return [num-((r-1)*width),r];
		}
		function Door(r,c,isHoriz)
		{
			return Grid[r][c][isHoriz ? "right" : "down"]==0;
		}
		
		// HELPFUL CONSTANTS:
		const startCell = CoordinatesToCellNumber(start);
		const finishCell = CoordinatesToCellNumber(finish);
		
		// GRID OF CELLS:
		var Grid = {};
		for(let r=1; r<=height; r++)
		{
			Grid[r] = {};
			let Row = binaryMaze.substring((2*width-1)*(r-1));
			for(let c=1; c<=width; c++)
			{
				let node = {
					"colour" : Colours.Blank,
					"right" : 0,
					"down" : 0
				};
				let detailsOfCell = Row.substring(c-1,c) + "0";
				if (r!=height)
				{
					Row = binaryMaze.substring((2*width-1)*(r-1),(2*width-1)*r);
					detailsOfCell = Row.substring(2*(c-1),2*c);
					if (c==width)
					{
						detailsOfCell = "0" + detailsOfCell;
					}
				}
				node.right = parseInt(detailsOfCell.substring(0,1));
				node.down = parseInt(detailsOfCell.substring(1,2) == "" ? "0" : detailsOfCell.substring(1,2));
				Grid[r][c] = node;
			}
		}
		
		// CANVAS:
		var canvas = document.getElementById("myCanvas");
		var canvasContainer = document.getElementById("canvasContainer");
		var ctx = canvas.getContext("2d");
		var widthOfCanvas = canvas.getAttribute("width");
		var heightOfCanvas = canvas.getAttribute("height");
		var pixelsPerSubcell = Math.min(Math.floor(widthOfCanvas/(4*width)),Math.floor(heightOfCanvas/(4*height)));
		if(pixelsPerSubcell<minPixelsPerSubcell)
		{
			canvas.setAttribute("width",width*4*minPixelsPerSubcell);
			canvas.setAttribute("height",height*4*minPixelsPerSubcell);
			widthOfCanvas = canvas.getAttribute("width");
			heightOfCanvas = canvas.getAttribute("height");
			pixelsPerSubcell = minPixelsPerSubcell;
		}
		if(!fixedContainerSize)
		{
			canvasContainer.style.width = widthOfCanvas + "px";
			canvasContainer.style.height = heightOfCanvas + "px";
			canvasContainer.style.overflow = "auto";
		}
		var shiftSpeed = widthOfCanvas/100;
		var gapX = Math.floor((widthOfCanvas-4*pixelsPerSubcell*width)/2);
		var gapY = Math.floor((heightOfCanvas-4*pixelsPerSubcell*height)/2);
		var offset = [0,0];
		function firstPixelFromCoordinates(Coordinates)
		{
			return [gapX+offset[0]+(4*pixelsPerSubcell)*(Coordinates[0]-1),gapY+offset[1]+(4*pixelsPerSubcell)*(Coordinates[1]-1)];
		}
		
		// FILLING CANVAS:
		// Background:
		for(var x=0; x<widthOfCanvas; x++)
		{
			for(var y=0; y<heightOfCanvas; y++)
			{
				ctx.fillStyle = "rgb(" + Math.floor((x*y)/(widthOfCanvas*heightOfCanvas)) + "," + Math.floor(x/widthOfCanvas*256) + "," + Math.floor(y/heightOfCanvas*256) + ")";
				ctx.fillRect(x+offset[0],y+offset[1],1,1);
			}
		}
		// Nodes & Paths:
		ctx.fillStyle = Colours.Blank;	
		for(var row=1; row<=height; row++)
		{
			for(var column=1; column<=width; column++)
			{
				var firstPixel = firstPixelFromCoordinates([column,row]);
				var count=0;
				if(column!=1 && !Door(row,column-1,true)) // Left vertical
				{
					ctx.fillRect(firstPixel[0]+0*pixelsPerSubcell,firstPixel[1]+1*pixelsPerSubcell, pixelsPerSubcell, 2*pixelsPerSubcell); 
					count++;
				}
				if(column!=width && !Door(row,column,true))  // Right vertical
				{
					ctx.fillRect(firstPixel[0]+3*pixelsPerSubcell,firstPixel[1]+1*pixelsPerSubcell, pixelsPerSubcell, 2*pixelsPerSubcell);
					count++;
				}
				if(row!=1 && !Door(row-1,column,false)) // Top horizontal
				{
					ctx.fillRect(firstPixel[0]+1*pixelsPerSubcell,firstPixel[1]+0*pixelsPerSubcell,  2*pixelsPerSubcell, pixelsPerSubcell);
					count++;
				}
				if(row!=height && !Door(row,column,false)) // Bottom horizontal
				{
					ctx.fillRect(firstPixel[0]+1*pixelsPerSubcell,firstPixel[1]+3*pixelsPerSubcell,  2*pixelsPerSubcell, pixelsPerSubcell);
					count++;
				}
				if(count>0)
				{
					ctx.fillRect(firstPixel[1]+pixelsPerSubcell,firstPixel[0]+pixelsPerSubcell,  2*pixelsPerSubcell, 2*pixelsPerSubcell);
				}
			}
		}
		canvasContainer.scrollTo(0,0);
		/*if(!backgroundFillsCanvas)
		{
			ctx.fillRect(pixelsPerSubcell*4*width,0,widthOfCanvas-pixelsPerSubcell*4*width,heightOfCanvas) // rest of canvas (vertical)
			ctx.fillRect(0,pixelsPerSubcell*4*height,widthOfCanvas,heightOfCanvas-pixelsPerSubcell*4*height) // rest of canvas (horizontal)
		}*/
		
		// PLOTTING ON CANVAS:
		function plotNode(Coordinates,colour)
		{
			var firstPixel = firstPixelFromCoordinates(Coordinates);
			Grid[Coordinates[1]][Coordinates[0]].colour = colour;
			ctx.fillStyle = colour;
			ctx.fillRect(firstPixel[0]+1*pixelsPerSubcell,firstPixel[1]+1*pixelsPerSubcell, pixelsPerSubcell*2,pixelsPerSubcell*2); 
		}
		function plotConnection(Coordinates,difference,colour)
		{
			ctx.fillStyle = colour;
			if(difference!=null)
			{
				var firstPixel1 = firstPixelFromCoordinates(Coordinates);
				var isHorizontal = difference[1]==0;
				var negativeAddition = (difference[0]+difference[1])<0 ? 2*pixelsPerSubcell : 0;
				difference = [	firstPixel1[0] + 3*pixelsPerSubcell*difference[0] + (isHorizontal ? negativeAddition : pixelsPerSubcell),
								firstPixel1[1] + 3*pixelsPerSubcell*difference[1] + (isHorizontal ? pixelsPerSubcell : negativeAddition)
							 ];
			}
			else
			{
				difference = Coordinates;
			}
			ctx.fillRect(difference[0],difference[1], pixelsPerSubcell*2,pixelsPerSubcell*2);
			return difference;
		}
		plotNode(currentCell,Colours.Current);
		plotNode(finish,Colours.Finish);
		
		// CONTROLS:
		function CellIsEmpty(curcell)
		{
			let col = Grid[curcell[1]][curcell[0]].colour;
			return (col == Colours.Blank || col == Colours.Finish);
		}
		function Valid(origin,direction) // If stays in maze...
		{
			let result= (Grid[origin[1]][origin[0]].right > 0 && direction=="Right") 
			|| (Grid[origin[1]][origin[0]].down > 0 && direction=="Down")
			|| (origin[0]>1 && Grid[origin[1]][origin[0]-1].right > 0 && direction=="Left")
			|| (origin[1]>1 && Grid[origin[1]-1][origin[0]].down > 0 && direction=="Up");
			return result;
		}
		function Move(d,direction) // d = [x,y]
		{
			let currentAtTimeOfMove = [currentCell[0],currentCell[1]]; // to make sure it doesnt *refer* to currentCell
			let curNumber = CoordinatesToCellNumber(currentAtTimeOfMove); // currentCell as integer for comparisons
			let destination = [currentCell[0] + d[0], currentCell[1]+d[1]]; // (row,column) where 1<=row<=height and 1<=col<=width
			if(destination[0] > 0 && destination[0]<=width && destination[1]>0 && destination[1]<=height && Valid(currentCell,direction))
			{ // If the move is within the bounds of the grid...
				currentCell = destination; // Set the new cell to the destination of the move
				let destNumber = CoordinatesToCellNumber(currentCell); // destination as integer for comarpisons
				let col = CellIsEmpty(destination) ? Colours.Path : Colours.Blank; // Get colour the previous cell becomes, then recolour it:
				plotNode(currentAtTimeOfMove,curNumber==startCell ? Colours.Start : (curNumber==finishCell ? Colours.Finish : col));
				if(PathDictionary[destNumber]!=null) // If the destination is already on the path, so we need to remove the loop...
				{
					let len = Path.length;
					for(var i=PathDictionary[destNumber]; i<len; i++)
					{
						let pathNode = Path.pop(); // coordinates of the node on the path (removes it from end of Path)
						var pathNodeNum = CoordinatesToCellNumber(pathNode); // above as an integer for comparisons
						PathDictionary[pathNodeNum] = null; // Tell future computations that this node is no longer on the path
						plotNode(pathNode,pathNodeNum == startCell ? Colours.Start : (pathNodeNum == finishCell ? Colours.Finish : Colours.Blank));
						// ^^ Clear the path node from the canvas
						if(i<len-1) // If we're before the last path node to removed...
						{
							let con = PathConnections.pop(); // Get the connection between this node and the next
							plotConnection(con,null,Colours.Blank); // Clear this connection
						}
					}
				}
				plotNode(destination,Colours.Current); // Highlight the current cell
				Path.push(destination); // Add the new cell to the path
				let con = plotConnection(currentAtTimeOfMove,d,col); // Create the connection between the previous cell and the new one
				if(col == Colours.Path) // If the previous cell is a path...
				{
					PathConnections.push(con); // ... Add it to the connections array so it can be recoloured later if a loop is formed containing its corresponding nodes
				}
				PathDictionary[destNumber] = Path.length-1; // Indicate that the new cell is now on the path at index ___
				stepsWithCycles++; // Increase the amount of valid moves we have made
			}
			if (CoordinatesToCellNumber(currentCell) == finishCell) // if Finished the maze...
			{
				plotNode(currentCell,Colours.Finish); // Colour the current cell (now the finish cell) as the finish square instead of current
				SolveMaze(Path); // Display best solution and end
				gameRunning = false; // Stop the game since it's over
				console.log("My Steps:",Path.length-1,"(or " + stepsWithCycles + " without cycles)");
			}		
		}
		function shiftCanvas(direction)
		{
			canvasContainer.scrollBy(direction[0]*shiftSpeed, direction[1]*shiftSpeed);
		}
		var keyCurrentlyDown
		function keydown(e)
		{
			if(keyCurrentlyDown == e.code || !gameRunning)
			{
				return;
			}
			else if(stopHoldingKey)
			{
				keyCurrentlyDown = e.code;
			}
			e.preventDefault();
			if(e.code == "KeyA")
			{
				Move([-1,0],"Left"); // direction = [x,y]
			}
			else if(e.code == "KeyD")
			{
				Move([1,0],"Right");
			}
			else if(e.code == "KeyW")
			{
				Move([0,-1],"Up");
			}
			else if(e.code == "KeyS")
			{
				Move([0,1],"Down");
			}
			else if(e.code == "ArrowLeft")
			{
				shiftCanvas([-1,0]);
			}
			else if(e.code == "ArrowRight")
			{
				shiftCanvas([1,0]);
			}
			else if(e.code == "ArrowUp")
			{
				shiftCanvas([0,-1]);
			}
			else if(e.code == "ArrowDown")
			{
				shiftCanvas([0,1]);
			}
		}
		function keyup(e)
		{
			if(keyCurrentlyDown == e.code)
			{
				keyCurrentlyDown = null;
			}
		}
		document.addEventListener("keydown", keydown);
		document.addEventListener("keyup", keyup);
		
		// FINISHING MAZE:
		function SolveMaze(usersPath) // users path = [[1,1],[1,2],...]
		{
			if(shortestPath.length<=2)
			{
				console.log("No solution");
				// TO DO: No solution!
			}
			else
			{
				var paintRoute = [];
				if(usersPath!=null && stepsWithCycles == shortestPathCost)
				{
					var sameRoute = false;
					if(usersPath.length==shortestPath.length)
					{
						sameRoute = true;
						for(let k=1; k<shortestPath.length-1; k++) // (Start and finish cells are the same)
						{
							sameRoute = sameRoute && CoordinatesToCellNumber(shortestPath[k])==CoordinatesToCellNumber(usersPath[k]);
							if(!sameRoute) { break; }
						}
					}
					console.log("User did a shortest path! " + (sameRoute ? "Same as computed." : "Different one though!"));
					Object.assign(paintRoute,usersPath);
				}
				else
				{
					console.log("Could've done better.");
					Object.assign(paintRoute,shortestPath);
				}
				for(let k=paintRoute.length-2; k>=0; k--)
				{
					let current = paintRoute[k];
					let previous = paintRoute[k+1];
					if(CoordinatesToCellNumber(paintRoute[k])!=startCell)
					{
						plotNode(current,Colours.Solution);
					}
					plotConnection(previous,[(current[0]-previous[0]),(current[1]-previous[1])],Colours.Solution);
				}
				plotNode(start,Colours.Start);
				plotNode(finish,Colours.Finish);
				
				// TO DO: Finished game!
			}
		}
		
		// FINAL PREPARATIONS:
		PathDictionary[startCell] = 0;
		console.log(Math.floor((document.documentElement.clientHeight*550/569)/(4*minPixelsPerSubcell)));
		console.log("fin");
	</script>
	<script>
		
	</script>
</body>
</html>