# Entropy

### Objective

Like explain by [Envalo] (http://www.envalo.com/image-cropping-php-using-entropy-explained/) entropy is a way to find 
the most energetic point in an image.

Energy (or entropy) in images are defined by 'edginess' in the image. 
For example a image of the sky have low edginess and an image of an anthill has very high edginess.

### How does it work?

To find the most important point we have 4 steps :  
1. we turn the image into black and white (for more efficiency).  
2. we apply the edge effect and the blur effect to highlight the outlines.  
3. we find the most energetic point with 25 slices (this number is arbitrary).  
4. then we return the coordinates of this point for the cropping operation.

### Advantages

The most important advantage of this way to crop an image is that you don't have to indicate the coordinate for the
cropping. Especially if you want to crop many photos in same time but without the same starting point.