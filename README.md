IGNACIO LEMMA (ignaciooleemma@gmail.com)
LUDMILA RUMBO (ludmilarumbo00@gmail.com)
TEMATICA: NOTICIAS DE TWITCH
DESCRIPCIÓN: El sitio de compone de noticias de Twitch mediante un sitio web donnde los usuarios pueden encontrar noticias sobre los streamers y el contenido de la plataforma de streaming de Twitch, donde se utiliza el DER para almacenar la información sobre las noticias y los usuarios, donde la entidad noticias almacena la información sobre cada noticia, tales sean el título, contenido y la fecha de publicación (id_usuario almacenaría la id del usuario que publicó la noticia), y la entidad user almacena la informacion de los usuarios, tales como, su usuario, mail y contraseña

Explicación Diagrama:
La relación que existe entre las dos entidades del diagrama, es que cada noticia pertenece a un user, una noticia no puede existir sin un user que la haya publicado.
La clave en la entidad noticias es id_usuario entonces cada noticia tiene un campo id_usuario que almacena la id del usuario que publicó, por lo que cada noticia está relacionada con un solo user, un user puede publicar muchas noticias, pero cada noticia solo puede ser publicada por un user, si un user publica una noticia, el campo id_usuario en la tabla noticias tendrá el valor de id de ese user.
Cuando un usuario publica una noticia, se crea una nueva tabla de noticias donde id_usuario se establecería con la id del user que publicó la noticia.
Luego un user al visitar el sitio, se recuperan todas las noticias de la tabla noticias estas se muestran en una lista ordenadas por fecha de publicación y de ahí los usuarios podrian hacer click en una noticia para verla.
