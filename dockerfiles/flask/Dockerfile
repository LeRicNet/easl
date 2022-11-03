# syntax=docker/dockerfile:1

# Start with basic linux container and python image
FROM python:3.9-alpine3.15

#CMD ["bash", "-c", "pip install jupyterlab"]
RUN pip install Flask
RUN pip install gevent

CMD ["/root/flask_backend.py"]
ENTRYPOINT ["python"]
