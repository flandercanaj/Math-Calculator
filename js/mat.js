// Javascript program to multiply two
// rectangular matrices
  
// Multiplies two matrices mat1[][]
// and mat2[][] and prints result.
// (m1) x (m2) and (n1) x (n2) are
// dimensions of given matrices.
function multiply(m1, m2, mat1, n1, n2, mat2)
{
    let x, i, j;
    let res = new Array(m1);
    for (i = 0; i < m1; i++)
        res[i] = new Array(n2);
          
    for (i = 0; i < m1; i++) 
    {
        for (j = 0; j < n2; j++) 
        {
            res[i][j] = 0;
            for (x = 0; x < m2; x++) 
            {
                res[i][j] += mat1[i][x] * mat2[x][j];
            }
        }
    }
    for (i = 0; i < m1; i++) 
    {
        for (j = 0; j < n2; j++) 
        {
            document.write(res[i][j] + " ");
        }
        document.write("<br>");
    }
}
// Driver code
    let mat1 = [ [ 2, 4 ], [ 3, 4 ] ];
    let mat2 = [ [ 1, 2 ], [ 1, 3 ] ];
    let m1 = 2, m2 = 2, n1 = 2, n2 = 2;
    
    // Function call
    multiply(m1, m2, mat1, n1, n2, mat2);