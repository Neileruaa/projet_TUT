import numpy as np
 
A = np.matrix([ [1.,0.25,1.],[1.,1./3,2.],[0.,1.,12.] ])
Y = np.matrix([ [0.],[0.],[1.] ])
X=np.linalg.solve(A,Y)
print X
[[ -7.50599938e+14]
[  4.50359963e+15]
[ -3.75299969e+14]]	