
  
    // JavaScript implementation to sort
    // the given matrix
      
    let SIZE  = 10
      
    // function to sort the given matrix
    function sortMat(mat, n)
    {
        // temporary matrix of size n^2
        let temp = new Array(n * n);
        let k = 0;
      
        // copy the elements of matrix one by one
        // into temp[]
        for (let i = 0; i < n; i++)
            for (let j = 0; j < n; j++)
                temp[k++] = mat[i][j];
      
        // sort temp[]
        temp.sort();
          
        // copy the elements of temp[] one by one
        // in mat[][]
        k = 0;
        for (let i = 0; i < n; i++)
            for (let j = 0; j < n; j++)
                mat[i][j] = temp[k++];
    }
      
    // function to print the given matrix
    function printMat(mat, n)
    {
        for (let i = 0; i < n; i++) {
            for (let j = 0; j < n; j++)
                document.write( mat[i][j] + " ");
            document.write( "<br>");
        }
    }
      
    // Driver program to test above
      
        let mat = [ [ 5, 4, 7 ],
                     [ 1, 3, 8 ],
                    [ 2, 9, 6 ] ];
        let n = 3;
      
        document.write( "Original Matrix: " + "<br>");
        printMat(mat, n);
      
        sortMat(mat, n);
        document.write( "<br>");
        document.write( " // Matrix After Sorting: " + "<br>");
        printMat(mat, n);
      
    // This code is contributed by Manoj
      
   
