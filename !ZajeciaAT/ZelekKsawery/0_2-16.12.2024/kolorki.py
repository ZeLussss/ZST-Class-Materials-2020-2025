import pygame

pygame.init()

BLACK = ( 0, 0, 0 )
WHITE = ( 255, 255, 255 )
BLUE = ( 0, 0, 255 )
GREEN = ( 0, 255, 0 )
RED = ( 255, 0, 0 )
PURPLE = ( 154, 0, 255 )
YELLOW = ( 239, 255, 0 )
CYAN = ( 0, 255, 255 )

size = ( 256, 256 )
screen = pygame.display.set_mode( size )

pygame.display.set_caption( "Pixels" )

done = False
clock = pygame.time.Clock()

while not done:

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            done = True

    screen.fill( WHITE )

    # pygame.draw.rect( screen, BLACK, [ 0, 0, 1, 1 ], 1 )
    surface = pygame.Surface( ( 8, 8 ) )

    for i in range( 0, 8 ):
        surface.set_at( [ i, 0 ], BLACK )
        surface.set_at( [ i, 1 ], WHITE )
        surface.set_at( [ i, 2 ], BLUE )
        surface.set_at( [ i, 3 ], GREEN )
        surface.set_at( [ i, 4 ], RED )
        surface.set_at( [ i, 5 ], PURPLE )
        surface.set_at( [ i, 6 ], YELLOW )
        surface.set_at( [ i, 7 ], CYAN )

    surface = pygame.transform.scale( surface, ( 256, 256 ) )
    screen.blit( surface, ( 0, 0 ) )

    pygame.display.flip()

    clock.tick( 60 )

pygame.quit()